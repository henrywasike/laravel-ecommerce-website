<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
.center{
    margin:auto;
    width:50%;
    border:2px solid white;
    text-align:center;
    margin-top:40px;
}
.font_size{
    text-align:center;
    padding-top:20px;
    font-size:40px;
}
.img_size{
    width:150px;
    height:150px;
}
.th_color{
    background:green;
}
.th_design{
    padding:30px;
}
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">



          {{session()->get('message')}}

         <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">x</button>

         </div>

        @endif

            <h2 class="font_size">All Products</h2>
           <table class="center">
            <tr class="th_color">
                <th class="th_design">Product title</th>
                <th class="th_design">Description</th>
                <th class="th_design">Quantity</th>
                <th class="th_design">Category</th>
                <th class="th_design">Price</th>
                <th class="th_design">Discount Price</th>
                <th class="th_design">Product Image</th>
                <th class="th_design">Delete</th>
                <th class="th_design">Edit</th>
            </tr>
            @foreach($product as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                    <img class="img_size" src="/product/{{$product->image}}" alt="">
                </td>
                 <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this')"
                    href="{{url('delete_product',$product->id)}}">Delete</a>
                 </td>
                 <td>
                    <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                 </td>
            </tr>
            @endforeach
           </table>
        
        </div>

            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>