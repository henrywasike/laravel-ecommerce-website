<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />


      <style type="text/css">
.center{
    margin:auto;
    width:70%;
    padding: 30px;
    text-align:center;
}
table,td,th{
    border:1px solid black;
}
.th_deg{
    padding:10px;
    font-size:20px;
    background-color:green;
    font-weight:bold;
}
      </style>
   </head>
   <body>
      
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
        <div class="center">
<table>
    <tr>
        <th class="th_deg">Product Title</th>
        <th class="th_deg">Quantity</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Payment Status</th>
        <th class="th_deg">Delivery Status</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Cancel Order</th>
</tr>

@foreach($order as $order)
<tr>
    <td>{{$order->product_title}}</td>
    <td>{{$order->quantity}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->payment_status}}</td>
    <td>{{$order->delivery_status}}</td>
    <td>

    <img style="height:100px; width:150px;" src="/product/{{$order->image}}" alt="">
    </td>
    
    <td>
    @if($order->delivery_status=='processing')
        <a onclick="return confirm('Are you sure you want to cancel this order')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">cancel order</a>
    @else
        <p style="color:blue;">Not allowed</p>
    
        @endif
    </td>
    
</tr>
@endforeach
</table>
        
        </div>
      
      <!-- jQery -->
      <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('home/js/custom.js')}}"></script>
   </body>
</html>