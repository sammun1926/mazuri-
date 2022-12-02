<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
  @include('Admin.css')
  <style type="text/css">

    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color
    {
        color: black;
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

                <h2 class="h2_font">Add Catagory</h2>
                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                <input class="input_color" type="text" name="catagory" placeholder="write catagory name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add catagory">
            </div>
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