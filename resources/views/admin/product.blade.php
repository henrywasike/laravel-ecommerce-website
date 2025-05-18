<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
.div_center{
    text-align:center;
    padding-top:40px;
}
.font_size{
    font-size:40px;
    padding-bottom:40px;
}
.text_color{
    color:black;
    padding-bottom:20px;                
}
label{
    display:inline-block;
    width:200px;
}
.div_design{
    padding-bottom:15px;
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
          <div class="div_center">
          @if(session()->has('message'))

<div class="alert alert-success">



  {{session()->get('message')}}

  <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">x</button>

</div>

@endif
          <h1 class="font_size">Add Product</h1>

          <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="div_design">
          <label for="">Product Title:</label>
          <input type="text" class="text_color" name="title" placeholder="Write a title">
          </div>
          
          <div class="div_design">
          <label for="">Product Description:</label>
          <input type="text" class="text_color" name="description" placeholder="Write a description" required="">
          </div>
          <div class="div_design">
          <label for="">Product Price:</label>
          <input type="number" class="text_color" name="price" placeholder="Write a price" required="">
          </div>
          <div class="div_design">
          <label for="">Discount Price:</label>
          <input type="number" class="text_color" name="dis_price" placeholder="Write a discount if applied">
          </div>
          <div class="div_design">
          <label for="">Product Quantity:</label>
          <input type="number" min="0" class="text_color" name="quantity" placeholder="Write a quantity" required="">
          </div>
          <div class="div_design">
          <label for="">Product Category:</label>
          <select name="Category" id="" class="text_color" required="">
            <option value="" selected="">Add Category Here</option>
            @foreach($category as $category)
            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
            @endforeach
          </select>
          </div>
          <div class="div_design">
            <label for="">Product Image Here</label>
            <input type="file" name="image" required="">
          </div>
          <div class="div_design">
            <input type="submit" value="Add Product" class="btn btn-primary">
          </div>
          </form>
          </div>
        </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>