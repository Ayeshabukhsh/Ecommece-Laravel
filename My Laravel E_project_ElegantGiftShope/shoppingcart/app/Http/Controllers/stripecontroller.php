<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\Product;
use Stripe;

class StripeController extends Controller
{
    /**
     * Display the Stripe payment page.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $bill = $request->input('bill');
        $firstname = $request->input('fname');
        $lastname = $request->input('lname');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');

        return view('stripe', compact('bill', 'firstname', 'lastname', 'phone', 'address', 'email'));
    }

    /**
     * Handle the Stripe payment process and order placement.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $amountInCents = $request->input('bill') * 100; // Convert amount to cents

        // Validate the amount does not exceed Stripe's limit
        if ($amountInCents > 99999999) {
            return back()->with('error', 'Amount must be less than $999,999.99.');
        }

        try {
            // Create the charge
            Stripe\Charge::create([
                "amount" => $amountInCents,
                "currency" => "pkr",
                "source" => $request->stripeToken,
                "description" => "New Order Payment Received Successfully"
            ]);

            Session::flash('success', 'Payment successful!');
            $user = Auth::user();

            // Save the order
            $order = new Order();
            $order->status = "paid";
            $order->customerid = $user->id;
            $order->bill = $request->input('bill');
            $order->firstname = $request->input('fname');
            $order->lastname = $request->input('lname');
            $order->address = $request->input('address');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');

            if ($order->save()) {
                $carts = Cart::where('customerid', $user->id)->get();

                foreach ($carts as $item) {
                    $product = Product::find($item->productid);

                    // Handle the case where the product is null
                    if (!$product) {
                        \Log::error('Product not found for cart item with ID: ' . $item->productid);
                        continue; // Skip to the next item if the product is not found
                    }

                    $orderItem = new OrderItem();
                    $orderItem->productid = $item->productid;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->price = $product->price;
                    $orderItem->orderid = $order->id;
                    $orderItem->save();

                    // Remove the item from the cart after processing
                    $item->delete();
                }

                return redirect('addtocart')->with('success', 'Order placed successfully');
            } else {
                \Log::error('Failed to save the order for user ID: ' . $user->id);
                return back()->with('error', 'Failed to place the order.');
            }
        } catch (\Stripe\Exception\CardException $e) {
            \Log::error('Payment failed: ' . $e->getMessage());
            return back()->with('error', 'Payment failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            \Log::error('An unexpected error occurred: ' . $e->getMessage());
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }
}