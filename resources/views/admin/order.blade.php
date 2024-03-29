<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
  @include('Admin.css')

  <style type="text/css">

.title_deg{
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    padding-bottom:40px;

}

.table_deg{

    border: 2px solid white;
    width: 100%;
    margin: auto;
   
    text-align: center;

}
.th_deg{

    background-color: skyblue;

}

.img_size{
    
    width: 200px;
    height: 100px;
}


  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sidebar')
      <!-- partial -->
      @include('Admin.header')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">

          <h1 class="title_deg">All Orders</h1>

          <table class="table_deg">

          <tr class="th_deg" >
            
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Product title</th>
          <th>Quantity</th>
          <th>price</th>
          <th>Payment Status</th>
          <th>Delivery Status</th>
          <th>Image</th>
          <th>Delivered</th>

</tr>


        @foreach($order as $order)

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
                    
                <img class="img_size" src="/product/{{$order->image}}">
            
            
                </td>

             

                <td>
                   @if($order->delivery_status=='processing') 

                    <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered!')"class="btn btn-primary">Delivered</a>

                    @else

                    <p style="color:green;">Delivered</p>

                @endif    
                </td>

         



            </tr>

           
@endforeach

          

          </table>


</div>
</div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="Admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>