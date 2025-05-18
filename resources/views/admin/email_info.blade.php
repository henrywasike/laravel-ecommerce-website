<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
    label{
     display:inline-block;
     width:200px;
     font-size:15px;
     font-weight:bold;
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
         <h1 style="text-align:center; font-size:25px;">Send Email to {{$order->email}}</h1>

         <form action="{{url('send_user_email',$order->id)}}" method="POST">
            @csrf
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email greeting :</label>
            <input style="color:black;" type="text" name="greeting">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email FirstLine :</label>
            <input style="color:black;" type="text" name="firstline">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email body :</label>
            <input style="color:black;" type="text" name="body">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email Button name :</label>
            <input style="color:black;" type="text" name="button">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email Url :</label>
            <input style="color:black;" type="text" name="url">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            <label for="">Email Last Line:</label>
            <input style="color:black;" type="text" name="lastline">
         </div>
         <div style="padding-left:35%; padding-top:30px;">
            
            <input style="color:black;" type="submit" value="Send Email" class="btn btn-primary">
         </div>

         </form>

</div>

            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>