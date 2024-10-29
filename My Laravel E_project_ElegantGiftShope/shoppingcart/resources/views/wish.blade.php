@extends('masterlayout')
@section('user')
<div class="container">
    <h2 class="text-center">WISHLIST: ITEMS</h2>
</div>
<div class="untree_co-section before-footer-section pt-5 mt-5 shadow-lg p-5">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table" id="cart">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                
                  <th class="product-remove">Remove</th>
                  
                </tr>
              </thead>
              <tbody>
                @if(session('wish'))
                @foreach(session('wish') as $id => $detail)
                <tr rowId="{{ $id }}">
                    <td class="">
                        <img src="images/{{ $detail['image'] }}" class="qq">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black">{{ $detail['name'] }}</h2>
                      </td>
                      <td>{{ $detail['price'] }}</td>
                 

                   
                      <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
        @endforeach
        @endif
             

              
              </tbody>
            </table>
          </div>
      
        </form>
      </div>

      <a href="/dashboard" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Back</a>
    </div>
  </div>


    @endsection
   @section('scripts')
<script type="text/javascript">
   
    
   
    $(".delete-product").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.wish.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>
@endsection