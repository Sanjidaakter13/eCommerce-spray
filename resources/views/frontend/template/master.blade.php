
<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="bootstrap 4, premium, multipurpose, ecommerce, html5, css" />
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
    <div class="loader clear-loader"> <img class="img-fluid" src="{{url('frontend/assets/images/loader.gif')}}" alt=""> </div>
  </div>
  
  <!-- preloader end --> 
  
  <!--header start-->
  
  @include('frontend.partial.header')
  
  <!--header end--> 
  
  <!--hero section start-->
  
  <section class="banner pos-r p-0">
    <div class="banner-slider home-slide owl-carousel no-pb owl-2" data-dots="true" data-nav="false">
      <div class="item bg-pos-ct" data-bg-img="{{url('frontend/assets/images/bg/01.jpg')}}">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-7 col-md-12 custom-py-2 position-relative z-index-1">
              <h6 class="font-w-6 text-black animated3">New promotions!</h6>
              <h1 class="mb-4 animated3 text-black">Discounts up to <br>
                30%  in July.</h1>
              <div class="animated3"> <a class="btn bg-pink-btn rounded-0" href="#">Shop Now</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item bg-pos-ct" data-bg-img="{{url('frontend/assets/images/bg/02.jpg')}}">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-7 col-md-12 custom-py-2 position-relative z-index-1">
              <h6 class="font-w-6 text-black animated3">-20% off this week</h6>
              <h1 class="mb-4 animated3 text-black">Special Wedding <br> Collection</h1>
              <div class="animated3"> <a class="btn bg-aqua-btn rounded-0" href="#">View Collection</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item bg-pos-ct" data-bg-img="{{url('frontend/assets/images/bg/03.jpg')}}">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-lg-7 col-md-12 custom-py-2 position-relative z-index-1">
              <h6 class="font-w-6 text-black animated3">Trending collection</h6>
              <h1 class="mb-4 animated3 text-black">Men's Festival<br> Collection</h1>
              <div class="animated3"> <a class="btn bg-orange-btn rounded-0" href="#">View Collection</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--hero section end-->
  
  <section class="banner-row full pt-4 pb-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-6">
          <div class="position-relative rounded overflow-hidden"> 
            <!-- Background --> 
            <img class="img-fluid hover-zoom" src="{{url('frontend/assets/images/product-ad/01.jpg')}}" alt=""> 
            <!-- Body -->
            <div class="position-absolute top-50 pl-5">
              <h6 class="text-dark">Digital World</h6>
              <!-- Heading -->
              <h3 class="text-dark font-w-7">Exchange <br>
                Deals</h3>
              <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a> </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="position-relative rounded overflow-hidden"> 
            <!-- Background --> 
            <img class="img-fluid hover-zoom" src="{{url('frontend/assets/images/product-ad/02.jpg')}}" alt=""> 
            <!-- Body -->
            <div class="position-absolute top-50 pl-5">
              <h6 class="text-dark">Todays Deals</h6>
              <!-- Heading -->
              <h3 class="font-w-7 text-dark">Accessories <br>
                Special</h3>
              <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a> </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12 mt-5 mt-lg-0 d-md-none d-lg-block">
          <div class="position-relative rounded overflow-hidden"> 
            <!-- Background --> 
            <img class="img-fluid hover-zoom" src="{{url('frontend/assets/images/product-ad/03.jpg')}}" alt=""> 
            <!-- Body -->
            <div class="position-absolute top-50 pl-5">
              <h6 class="text-dark">Hot Deals</h6>
              <!-- Heading -->
              <h3 class="font-w-7">Handbags<br>
                Design</h3>
              <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--body content start-->
  
  <div class="page-content"> 
    
    <!--product start-->
    
    <section class="pb-6">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-lg-6 col-md-10">
            <div>
              <h2 class="mb-0 font-w-6">New Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="tab">
              <nav class="mb-5 text-center">
                <div class="nav nav-tabs nav-tabs-div d-inline-block justify-content-md-end" id="nav-tab" role="tablist"> <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="true">Top Rated</a> <a class="nav-item nav-link  active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="false">Best Seller</a> <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="false">Special</a> </div>
              </nav>
              <div class="tab-content p-0" id="nav-tabContent">
                <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default rounded-0">
                        <div class="sale-label">-15%</div>
                        <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-back" src="{{url('frontend/assets/images/product/p10.jpg')}}" alt="..."> <img class="card-img-front" src="{{url('frontend/assets/images/product/p10_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                          <div class="product_color_switch">
                          <span class="active" data-color="#3e3e40" style="background-color:#3e3e40" data-toggle="tooltip" data-placement="top" title="" data-original-title="Black"></span>
                           <span data-color="#ac4e10" style="background-color:#ac4e10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></span>
                            <span data-color="#e8e7e5" style="background-color:#e8e7e5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grey"></span>
                                            </div>
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default rounded-0"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-back" src="{{url('frontend/assets/images/product/p13.jpg')}}" alt="..."> <img class="card-img-front" src="{{url('frontend/assets/images/product/p13_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p11_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                          <div class="product_img_switch">
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Black Bag"><img src="{{url('frontend/assets/images/product/switch/01.jpg')}}" alt="..."></span>
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown Bag"><img src="{{url('frontend/assets/images/product/switch/02.jpg')}}" alt="..."></span>
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Grey Bag"><img src="{{url('frontend/assets/images/product/switch/03.jpg')}}" alt="..."></span>
                           </div>
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default">
                        <div class="new-label">New</div>
                        <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p15.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p15_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                          <ul class="countdown list-inline d-flex p-0 justify-content-center" data-countdown="2021/05/23"></ul>
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                         <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p8.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p8_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default">
                        <div class="hot-label">Hot</div>
                        <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p5.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p5_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p3.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p3_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p6.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p6_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade show" id="tab1-2">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p2.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p2_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p9.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p9_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p4_hover.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p4.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p14.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p14_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p10.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p10_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p11_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p12.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p12_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p7.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p7_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-6"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade show" id="tab1-3">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p15.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p15_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p5.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p5_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p3.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p3_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p11_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p8.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p8_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p13.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p13_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p1_hover.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p1.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                      <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p6.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p6_hover.jpg')}}" alt="..."> </a>
                        <div class="card-icons">
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                          <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                        </div>
                        <div class="card-info">
                          <div class="card-body">
                            <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                            <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                              <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                            </div>
                          </div>
                          <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                              <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--product end--> 
    
    <!--feature start-->
    
    <section class="bg-pink-light pt-8 pb-8">
      <div class="container"> 
        <!-- / .row -->
        <div class="row text-center">
          <div class="col-lg-4 col-sm-6">
            <div class="mx-10"> <i class="las la-truck ic-2x text-dark"></i>
              <h5 class="mb-1">We ship worldwide on order over $99</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-3 mt-sm-0">
            <div class="mx-10"> <i class="las la-wallet ic-2x text-dark"></i>
              <h5 class="mb-1">Safe, superfast & secure payment gateways</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 mt-3 mt-lg-0">
            <div class="mx-10"> <i class="las la-mobile ic-2x text-dark"></i>
              <h5 class="mb-1">Call for styling advice on +123 1234 5678</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--feature end--> 
    
    <!--product start-->
    
    <section class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="bg-white">
              <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-8 col-md-10">
                  <div>
                    <h2 class="mb-0 font-w-6">Featured Products</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="4" data-md-items="2" data-sm-items="2">
                  <div class="item">
                    <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p2.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p2_hover.jpg')}}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                        <div class="product_color_switch">
                      <span data-color="#3e3e40" style="background-color:#3e3e40" data-toggle="tooltip" data-placement="top" title="" data-original-title="Black"></span>
                        <span data-color="#ac4e10" style="background-color:#ac4e10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></span>
                       <span data-color="#e8e7e5" style="background-color:#e8e7e5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grey"></span>
                                            </div>
                          <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p11_hover.jpg')}}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                        <div class="product_img_switch">
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Black"><img src="{{url('frontend/assets/images/product/switch/01.jpg')}}" alt="..."></span>
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"><img src="{{url('frontend/assets/images/product/switch/02.jpg')}}" alt="..."></span>
                          <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Grey"><img src="{{url('frontend/assets/images/product/switch/03.jpg')}}" alt="..."></span>
                           </div>
                          <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p15.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p15_hover.jpg')}}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p9.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p9_hover.jpg')}}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                        <ul class="countdown list-inline d-flex p-0 justify-content-center" data-countdown="2021/05/23"></ul>
                          <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p7.jpg')}}" alt="..."> <img class="card-img-top card-img-front" src="{{url('frontend/assets/images/product/p7_hover.jpg')}}" alt="..."> </a>
                      <div class="card-icons">
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"> <i class="lar la-heart"></i> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"> <i class="ion-ios-search-strong"></i></span> </a> </div>
                        <div class="card-icons__item"> <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Compare"> <i class="las la-random"></i> </a> </div>
                      </div>
                      <div class="card-info">
                        <div class="card-body">
                          <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                          <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                            <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                          </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                          <div class="product-link d-flex align-items-center justify-content-center">
                            <button class="btn-cart btn btn-pink mx-3" type="button"><i class="las la-shopping-cart mr-1"></i> Add to cart </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--product end--> 
    
    <!--hot deal start-->
    
    <section class="bg-pos-ct bg-xs-none hot-deal-1 bg-light-4" data-bg-img="{{url('frontend/assets/images/bg/05.jpg')}}">
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-6 col-md-10">
            <div>
              <h6 class="text-pink mb-4 font-w-5 border-bottom-pink"> Limited Time Offer </h6>
              <h2 class="font-w-6">Casual with pockets</h2>
              <div class="color-availblity">Colors : <span class="yellow-round"></span> <span class="purple-round"></span> <span class="green-round"></span></div>
              <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.</p>
              <h7>Only $29.99</h7>
            </div>
            <ul class="countdown list-inline d-flex mt-5 mb-0 p-0" data-countdown="2022/09/23">
            </ul>
          </div>
          <div class="myDIV"><a href="product-default.html"><i class="las la-plus"></i></a></div>
          <div class="hide">
            <div class="card product-card card--default"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-top card-img-back" src="{{url('frontend/assets/images/product/p3.jpg')}}" alt="..."> </a>
              <div class="card-info">
                <div class="card-body pb-0">
                  <div class="product-title font-w-5"><a class="link-title" href="product-default.html">Unpaired Running Shoes</a> </div>
                  <div class="mt-1"> <span class="product-price text-pink"><del class="text-muted">$35.00</del> $25.00</span>
                    <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--hot deal end--> 
    
    <!--blog start-->
    
    <section>
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-12 col-md-10 col-lg-8">
            <div>
              <h2 class="mb-0 font-w-6">Latest From Blog</h2>
            </div>
          </div>
        </div>
        <!-- / .row -->
        <div class="row">
          <div class="col-12 col-lg-4"> 
            <!-- Blog Card -->
            <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
              <span class="featured-icon"><i class="las la-image"></i></span>
                
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/01.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <span class="date text-pink">12 June</span> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-single.html">Powerful and flexible premium Ecommerce themes</a> </h2>
              </div>
              <div></div>
            </div>
            <!-- End Blog Card --> 
          </div>
          <div class="col-12 col-lg-4 mt-5 mt-lg-0"> 
            <!-- Blog Card -->
            <div class="card border-0 bg-transparent">
            <span class="featured-icon"><i class="las la-play"></i></span>
              <video id="clip1" class="rounded" width="100%" muted="" autoplay preload="" loop poster="{{url('frontend/assets/images/blog/video-image.jpg')}}"  style="object-fit: cover; min-height:240px;
    z-index: -100;">
                <source src="{{url('frontend/assets/images/blog/fashion-videos.mp4')}}" type="video/mp4">
              </video>
              <div class="card-body px-0 pb-0">
                <div> <span class="date text-pink">09 April</span> <a class="d-inline-block link-title btn-link text-small" href="#">Clothing,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Footwear,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Accessories</a> </div>
                <h2 class="h5 font-w-5 mt-2"> <a class="link-title" href="blog-single.html">Premium template with unlimited colours, and fully Customizable</a> </h2>
              </div>
              <div></div>
            </div>
            <!-- End Blog Card --> 
          </div>
          <div class="col-12 col-lg-4 mt-5 mt-lg-0"> 
            <!-- Blog Card -->
            <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden bg-light-4">
              <span class="featured-icon"><i class="las la-volume-up"></i></span>
                <div class="loader-container">
                  <div class="rectangle-1"></div>
                  <div class="rectangle-2"></div>
                  <div class="rectangle-3"></div>
                  <div class="rectangle-4"></div>
                  <div class="rectangle-5"></div>
                  <div class="rectangle-6"></div>
                  <div class="rectangle-5"></div>
                  <div class="rectangle-4"></div>
                  <div class="rectangle-3"></div>
                  <div class="rectangle-2"></div>
                  <div class="rectangle-1"></div>
                </div>
                <audio controls autoplay style="object-fit: cover; width:100%">
                  <source src="{{url('frontend/assets/images/blog/audio.mp3')}}" type="audio/mpeg">
                </audio>
              </div>
              <div class="card-body px-0 pb-0">
                <div> <span class="date text-pink">27 March</span> <a class="d-inline-block link-title btn-link text-small" href="#">Sleepwear,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Jwellery,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Fashion</a> </div>
                <h2 class="h5 font-w-5 mt-2"> <a class="link-title" href="blog-single.html">Awesome template with lot's of features on the board!</a> </h2>
              </div>
              <div></div>
            </div>
            <!-- End Blog Card --> 
          </div>
        </div>
      </div>
    </section>
    
    <!--blog end--> 
    
    <!--multi sec start-->
    
    <section class="bg-pink py-9 position-relative overflow-hidden">
      <div class="container">
        <div class="row justify-content-center text-center mb-1">
          <div class="col-lg-6 col-md-10">
            <div class="mb-4">
              <h2 class="mb-0">Be the first and get weekly updates</h2>
            </div>
            <div class="subscribe-form">
              <form id="mc-form" class="row align-items-center no-gutters mb-3">
                <div class="col">
                  <input value="" name="EMAIL" class="email form-control input-2 bg-white" id="mc-email" placeholder="Email Address" required type="email">
                </div>
                <div class="col-auto">
                  <input class="btn dark-btn overflow-auto" name="subscribe" value="Subscribe" type="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--multi sec end--> 
    
  </div>
  
  <!--body content end--> 
  
  <!--footer start-->
 
  @include('frontend.partial.footer')
  
  <!--footer end--> 
  
</div>

<!-- page wrapper end --> 



<!-- Quick View Modal -->
<div class="modal fade view-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close-quickview" data-dismiss="modal" aria-label="Close"> <i class="ion-ios-close-empty"></i> </button>
      <div class="modal-body">
        <div class="row align-items-center">
          <div class="col-lg-5 col-12"> <img class="img-fluid rounded" src="{{url('frontend/assets/images/product/p11.jpg')}}" alt="" /> </div>
          <div class="col-lg-7 col-12 mt-5 mt-lg-0">
            <div class="product-details">
          <h1 class="h4 mb-0 font-w-6">Unpaired Running Shoes</h1>
          <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
          </div> <span class="product-price h5 text-pink">$25.00 <del class="text-muted h6">$35.00</del></span>
          <ul class="list-unstyled my-3">
            <li><small>Availibility: <span class="text-green"> In Stock</span> </small>
            </li>
            <li class="font-w-4"><small>Categories :<span class="text-muted"> womens, clothing, dresses, footwear</span></small>
            </li>
          </ul>
          <p class="mb-4 desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. vulputate adipiscing cursus eu, suscipit id nulla. quis fermentum turpis eros eget velit.</p>
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
    </div>
  </div>
</div>

<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end--> 

<!-- inject js start --> 

<script src="{{url('frontend/assets/js/jquery-3.5.1.min.js')}}"></script> 
<script src="{{url('frontend/assets/js/popper.min.js')}}"></script> 
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
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
