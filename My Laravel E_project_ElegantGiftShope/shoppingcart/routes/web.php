<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\controllers\homecontroller;
use App\Http\controllers\catcontroller;
use App\Http\controllers\productcontroller;
use App\Http\controllers\teamcontroller;
use App\Http\controllers\cardcontroller;
use App\Http\controllers\stripecontroller;
use App\Http\Controllers\SellerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// seller route
Route::prefix('seller')->group(function (){
    Route::get('/login',[SellerController::class, 'sellerindex'])->name('seller_login_form');
    Route::post('/login/owner',[SellerController::class,'sellerlogin'])->name('seller.login');
    Route::get('/dashboard',[SellerController::class,'sellerdashboard'])->name('seller.dashboard');
    Route::get('/logout',[SellerController::class,'sellerlogout'])->name('seller.logout');
    Route::get('/register',[SellerController::class, 'sellerregister'])->name('seller.register');
    Route::post('/register/create',[SellerController::class,'sellerregistercreate'])->name('seller.register.create');
    Route::get('ps',[SellerController::class,'addsproduct']);
    Route::post('addproductdatas',[SellerController::class,'addproductdatas']);
    Route::get('/showproducts',[SellerController::class,'showproducts']);
    
    Route::get('prob',[SellerController::class,'prob'])->name('seller.prob');
    
    Route::get('rereq/{id}',[SellerController::class,'rereq']);
     Route::get('viewcategorys',[SellerController::class,'viewcategorys']);
   
   
});



// wishlist
Route::get('/shopping-wish', [productcontroller::class, 'productwish'])->name('shopping.wish');
Route::get('/wish/{id}', [productcontroller::class, 'addproducttowish'])->name('addproduct.to.wish');
Route::delete('/delete-wish-product', [productcontroller::class, 'deletewish'])->name('delete.wish.product');
Route::get('/cartwish',[productcontroller::class,'cartwish'])->name('/cartwish');
// end


Route::controller(stripecontroller::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});



Route::get('single/{id}',[cardcontroller::class,'single']);

// homepages
Route::get('/',[cardcontroller::class,'welcome']);

Route::get('myorders',[cardcontroller::class,'myorders']);

Route::get('/contact',[cardcontroller::class,'contact']);
Route::get('/m',[cardcontroller::class,'master']);
Route::get('/about',[cardcontroller::class,'about']);
Route::get('/gift',[cardcontroller::class,'gift']);
Route::get('/gift1',[cardcontroller::class,'gift1']);
Route::get('/gift2',[cardcontroller::class,'gift2']);
Route::get('/gift3',[cardcontroller::class,'gift3']);
Route::get('/gift4',[cardcontroller::class,'gift4']);
Route::get('/art',[cardcontroller::class,'art']);
Route::get('/g',[cardcontroller::class,'card']);
Route::get('/doll',[cardcontroller::class,'toys']);
Route::get('/hand',[cardcontroller::class,'hand']);
Route::get('/wallet',[cardcontroller::class,'wallet']);
Route::get('/sta',[cardcontroller::class,'stationary']);
Route::get('/beauty',[cardcontroller::class,'beauty']);

Route::get('/vorder/{id}',[cardcontroller::class,'vorder']);
Route::get('/feed',[cardcontroller::class,'feedback']);
Route::post('addfeedbackdata',[cardcontroller::class,'addfeedbackdata']);

Route::post('addtocart',[cardcontroller::class,'addtocartitem']);
Route::post('updatecart',[cardcontroller::class,'updatecart']);
Route::get('addtocart',[cardcontroller::class,'productcart']);
Route::get('/deletecartitems/{id}',[cardcontroller::class,'deletecartitems']);
Route::get('checkoutt',[cardcontroller::class,'checkoutt']);
Route::get('/cartshop', [cardcontroller::class, 'productcartitems'])->name('shoppingitem.cart');

// homepgesroute

Route::get('/seller', function () {
    return view('auth.seller');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home',[homecontroller::class,'index']);


// admin section
Route::middleware('admin')->group(function () {
   
    Route::get('/admindash',[productcontroller::class,'admindash']);
//    category routes
    Route::get('/addcategory',[catcontroller::class,'addcategory']);
    Route::post('/addcategorydata',[catcontroller::class,'addcategorydata']);
    Route::get('/viewcategory',[catcontroller::class,'viewcategory']);
    Route::post('searchb',[catcontroller::class,'viewcategory']);
    Route::get('deletecategory/{id}',[catcontroller::class,'deletecategory']);
    Route::post('updatecategory/{id}',[catcontroller::class,'updatecategory']);

    // product routes 
    Route::get('/addproduct',[productcontroller::class,'addproduct']);
    Route::post('addproductdata',[productcontroller::class,'addproductdata']);
    Route::get('/showproduct',[productcontroller::class,'showproduct']);
    Route::get('deleteproduct/{id}',[productcontroller::class,'deleteproduct']);
    Route::post('search',[productcontroller::class,'showproduct']);
    Route::post('updateproduct/{id}',[productcontroller::class,'updateproduct']);
    Route::get('/requested',[productcontroller::class,'request']);
    Route::get('/accept/{id}',[productcontroller::class,'accept']);
    Route::get('/reject/{id}',[productcontroller::class,'reject']);
    Route::get('sellersview',[productcontroller::class,'sellerview']);
    // team routes
    Route::get('/addt',[teamcontroller::class,'addteam']);
    Route::post('addteam',[teamcontroller::class,'addteamdata']);
    Route::get('/viewteam',[teamcontroller::class,'viewteam']);
    Route::post('searcht',[teamcontroller::class,'viewteam']);
    Route::get('deleteteam/{id}',[teamcontroller::class,'deleteteam']);
   
    Route::post('updateteam/{id}',[teamcontroller::class,'updateteam']);
    Route::get('/order',[homecontroller::class,'vieworder']);
    Route::get('deleteorder/{id}',[homecontroller::class,'deleteorder']);
    Route::get('/vf',[homecontroller::class,'viewfeedback']);
    Route::post('searchf',[homecontroller::class,'viewfeedback']);
    Route::get('deletefeedback/{id}',[homecontroller::class,'deletefeedback']);
    Route::get('vfd/{id}',[homecontroller::class,'viewfeed']);

    Route::get('/addoffer',[homecontroller::class,'addoffer']);
    Route::post('/addofferdata',[homecontroller::class,'addofferdata']);
    Route::get('/viewoffer',[homecontroller::class,'viewoffer']);
    Route::get('deleteoffer/{id}',[homecontroller::class,'deleteoffer']);
    Route::post('updateoffer/{id}',[homecontroller::class,'updateoffer']);

    Route::get('/addinfo',[homecontroller::class,'addinfo']);
    Route::post('/addinfodata',[homecontroller::class,'addinfodata']);
    Route::get('/viewinfo',[homecontroller::class,'viewinfo']);
    Route::get('deleteinfo/{id}',[homecontroller::class,'deleteinfo']);
    Route::post('updateinfo/{id}',[homecontroller::class,'updateinfo']);

});
// admin section



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
