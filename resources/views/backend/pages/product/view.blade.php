
@extends('backend.template.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
 
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="bootstrap 4, premium, multipurpose, ecommerce, html5, CSS" />
<meta name="description" content="Bootstrap 4 Landing Page Template" />
<meta name="author" content="www.themesground.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title> Single View</title>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{url('frontend/assets/images/favicon.png')}}" />

<!-- inject css start -->

<link href="{{url('frontend/assets/css/theme-plugin.css')}}" rel="stylesheet" />
<!-- <link href="{{url('frontend/assets/css/theme.min.css')}}" rel="stylesheet" /> -->

<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="{{url('frontend/assets/images/loader.gif')}}" alt="">
  </div>
</div>

<!-- preloader end -->





<!--hero section start-->

<section class="bg-light py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h2 mb-0">Product Page</h1>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!--product details start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src="{{url('uploads/products'). '/' .$product->image}}" data-zoom-image="{{url('frontend/assets/images/product/p11.jpg')}}" alt="product_img1" />
                    </div>
                </div>
      </div>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">{{$product->name}}</h1>
          <span class="product-price h5 text-pink">Price:{{$product->price}}</span>
          <ul class="list-unstyled my-5">
            <li><small>Stock: <span class="text-green"> {{$product->stock}}</span> </small>
            </li>
            <li class="font-w-4"><small>Categories :<span class="text-muted">{{$product->category->name}} </span></small>
            </li>
          </ul>
          <p class="mb-5 border-top border-bottom pb-5 pt-5 desc">{{$product->description}}</p>
          <div class="d-sm-flex align-items-center mt-5">
            <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class=""></i>Back</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--product details end-->
</div>

<!--body content end--> 




</div>



<!-- inject js start -->

<script src="{{url('frontend/assets/js/jquery-3.5.1.min.js')}}"></script> <script src="{{url('frontend/assets/js/popper.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/light-slider.js')}}"></script> 
<script src="{{url('frontend/assets/js/parallax.js')}}"></script> 
<script src="{{url('frontend/assets/js/magnific-popup.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/jquery.countdown.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/jquery.dd.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/validator.js')}}"></script> 
<script src="{{url('frontend/assets/js/wow.js')}}"></script> 
<script src="{{url('frontend/assets/js/theme-script.js')}}"></script> 

<!-- inject js end -->

</body>
 
</html>
@endsection