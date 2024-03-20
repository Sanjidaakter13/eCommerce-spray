
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
<title> - Multi-purpose E-commerce Html5 Template</title>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{url('frontend/assets/images/favicon.png')}}" />

<!-- inject css start -->

<link href="{{url('frontend/assets/css/theme-plugin.css')}}" rel="stylesheet" />
<link href="{{url('frontend/assets/css/theme.min.css')}}" rel="stylesheet" />

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
                        <img id="product_img" src="{{url('frontend/assets/images/product/p11.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p11.jpg')}}" alt="product_img1" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider no-pb owl-carousel owl-2" data-dots="false" data-nav="false" data-items="5" data-md-items="2" data-sm-items="1">
                        <div class="item">
                            <a href="#" class="product_gallery_item active" data-image="{{url('frontend/assets/images/product/p11.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p11.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="product_small_img1" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="{{url('frontend/assets/images/product/p13.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p13.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p13.jpg')}}" alt="product_small_img2" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="{{url('frontend/assets/images/product/p10.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p10.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p10.jpg')}}" alt="product_small_img3" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="{{url('frontend/assets/images/product/p15.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p15.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p15.jpg')}}" alt="product_small_img4" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="{{url('frontend/assets/images/product/p2.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p2.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p2.jpg')}}" alt="product_small_img4" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="{{url('frontend/assets/images/product/p5.jpg')}}" data-zoom-image="{{url('frontend/assets/images/product/p5.jpg')}}">
                                <img src="{{url('frontend/assets/images/product/p5.jpg')}}" alt="product_small_img4" />
                            </a>
                        </div>
                    </div>
                </div>
      </div>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">Unpaired Running Shoes</h1>
          <div class="star-rating mb-5"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
          </div> <span class="product-price h5 text-pink">$25.00 <del class="text-muted h6">$35.00</del></span>
          <ul class="list-unstyled my-5">
            <li><small>Availibility: <span class="text-green"> In Stock</span> </small>
            </li>
            <li class="font-w-4"><small>Categories :<span class="text-muted"> womens, clothing, dresses, footwear</span></small>
            </li>
          </ul>
          <p class="mb-5 border-top border-bottom pb-5 pt-5 desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
          <div class="d-sm-flex align-items-center mb-5">
            <div class="d-flex align-items-center mr-sm-4">
              <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
              </button>
              <input class="form-product" type="number" name="form-product" value="1">
              <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
              </button>
            </div>
            <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02">
              <option selected>Size</option>
              <option value="1">XS</option>
              <option value="2">S</option>
              <option value="3">M</option>
              <option value="3">L</option>
              <option value="3">XL</option>
              <option value="3">XXL</option>
            </select>
            <div class="d-flex text-center ml-sm-4 mt-3 mt-sm-0">
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter1" name="Radios">
                <label class="form-check-label" for="color-filter1" data-bg-color="#ffc107"></label>
              </div>
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter2" name="Radios" checked>
                <label class="form-check-label" for="color-filter2" data-bg-color="#6d5b97"></label>
              </div>
              <div class="form-check pl-0 mr-2">
                <input type="radio" class="form-check-input" id="color-filter3" name="Radios">
                <label class="form-check-label" for="color-filter3" data-bg-color="#88b04b"></label>
              </div>
              <div class="form-check pl-0">
                <input type="radio" class="form-check-input" id="color-filter4" name="Radios">
                <label class="form-check-label" for="color-filter4" data-bg-color="#23a5a8"></label>
              </div>
            </div>
          </div>
          <div class="d-sm-flex align-items-center mt-5">
            <button class="btn btn-primary btn-animated mr-sm-3 mb-3 mb-sm-0"><i class="las la-shopping-cart mr-2"></i>Add To Cart</button>
            <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-2 ic-1-2x"></i>Add To Wishlist
            </a>
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
<script src="{{url('frontend/assets/js/jquery.elevatezoom.js')}}"></script> 
<script src="{{url('frontend/assets/js/theme-script.js')}}"></script> 

<!-- inject js end -->

</body>
 
</html>
@endsection