<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <base href="/public">

  @include('Admin.css')
  <style type="text/css">

    .div_center
    {
        text-align: center;
        padding-top: 40px;

    } 
    .font_size
    {
        font-size: 40px;
        padding-bottom:40px;
    }

    .text_color
    {
        color: black;
        padding-bottom: 20px;
    }
    label
    {
      display: inline-block;
      width: 200px;
    }
    .div_design{
      padding-bottom: 15px;
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
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}
             </div>
            @endif

           <div class="div_center">
             <h1 class="font_size">Update Product</h1>
            <div class="div_design">

            <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="div_design">

            <label> Product Title</label>
            <input class="text_color" type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">

            </div>
            <div class="div_design">

            <label> Product Description</label>
            <input class="text_color" type="text" name="description" placeholder="write a description" required="" value="{{$product->description}}">

            </div>
            <div class="div_design">

            <label> Product Price</label>
            <input class="text_color" type="number" name="price" placeholder="write a price" required="" value="{{$product->price}}">

            </div>
          
            <div class="div_design">

            <label> Discount Price</label>
            <input class="text_color" type="number" name="dis_price" placeholder="write a discount is applied" value="{{$product->discount_price}}">

            </div>
            <div class="div_design">
            <label> Product Quantity</label>
             <input class="text_color" type="number" min="0" name="quantity" placeholder="write a quantity" required="" value="{{$product->quantity}}">

            </div>
         
            <div class="div_design" >

            <label> Product Catagory</label>
            <select class="text_color" name="catagory" required="">
              <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
              @foreach($catagory as $catagory )
              <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
              @endforeach
            </select>
            </select>

            </div>
            <div class="div_design">

            <label> Current product image</label>
            <img style="margin:auto;"height="100" width="100" src="/product/{{$product->image}}">

              </div>

            <div class="div_design">

            <label> Change Product Image </label>
           <input type="file" name="image">

            </div>
            <div class="div_design">

            
           <input type="submit" value="Update Product" class="btn btn-primary">

            </div>

            </form>


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