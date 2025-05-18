<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
.title_deg{
    text-align:center;
    font-size:25px;
    font-weight:bold;
    padding-bottom:50px;
}
.table_deg{
    border:2px solid white;
    margin:auto;
    width:100%;
    
    text-align:center;
}
.th_deg{
    background-color:green;
}
.img_size{
    width: 150px;
    height:100px; 
}
    </style>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
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
            <h1 class="title_deg">All Orders</h1>

            <div style="margin:auto; padding-bottom:30px; padding-left:400px;">
              <form action="{{url('search')}}" method="get">
                @csrf
                <input  type="text" style="class="black;" name="Search" placeholder="Search for something">
                <input type="submit" value="Search" class="btn btn-outline-primary">
              </form>
            </div>
<table class="table_deg">
    <tr class="th_deg">
        <th style="padding:10px;">Name</th>
        <th style="padding:10px;">Email</th>
        <th style="padding:10px;">Address</th>
        <th style="padding:10px;">Phone</th>
        <th style="padding:10px;">Product title</th>
        <th style="padding:10px;">Quantity</th>
        <th style="padding:10px;">Price</th>
        <th style="padding:10px;">Payment Status</th>
        <th style="padding:10px;">Delivery Status</th>
        <th style="padding:10px;">Image</th>
        <th style="padding:10px;">Delivered</th>
        <th style="padding:10px;">Print PDF</th>
        <th style="padding:10px;">Send Email</th>
        
    </tr>
    @forelse($order as $order)
    <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->product_title}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->payment_status}}</td>
        <td>{{$order->delivery_status}}</td>
        <td>
            <img class="img_size" src="/product/{{$order->image}}" alt="">
        </td>
        <td>
     @if($order->delivery_status=='processing')
      <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered!!')" class="btn btn-primary">Delivered</a>
       @else

       <p style="color:green">Delivered</p>
       @endif
       </td>
       <td>
        <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
       </td>
       <td>

       <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a>
       </td>
    
    </tr>
    @empty
    
      <tr>
        <td colspan="16">
       No Data Found
        </td>
      </tr>
    @endforelse
</table>



</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>