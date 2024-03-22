@extends('frontend.template.master')

@section('frontend.content')


<header class="site-header header-1">
    <div class="header-top bg-dark-1 py-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 d-flex align-items-center justify-content-between text-white">
            <div class="d-md-flex align-items-center call-info">
              <div class="d-flex align-items-center">
                <div class="text-white offer-text"><small><span>60%</span> discount on womens collection</small> </div>
                <div class="language-selection">
                  <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                    <div class="ml-3 mr-3">
                      <select name="countries" class="custome_select">
                        <option value='USD' data-title="USD">USD</option>
                        <option value='EUR' data-title="EUR">EUR</option>
                        <option value='GBR' data-title="GBR">GBR</option>
                      </select>
                    </div>
                    <div class="lng_dropdown">
                      <select name="countries" class="custome_select">
                        <option value='en' data-image="{{url('frontend/assets/images/eng.png')}}" data-title="English">English</option>
                        <option value='fn' data-image="{{url('frontend/assets/images/fn.png')}}" data-title="France">France</option>
                        <option value='us' data-image="{{url('frontend/assets/images/us.png')}}" data-title="United States">United States</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-flex align-items-center">
              <div class="social-icons">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-white" href="#"><i class="lab la-facebook-f"></i></a> </li>
                  <li class="list-inline-item"><a class="text-white" href="#"><i class="lab la-twitter"></i></a> </li>
                  <li class="list-inline-item"><a class="text-white" href="#"><i class="lab la-linkedin-in"></i></a> </li>
                  <li class="list-inline-item"><a class="text-white" href="#"><i class="lab la-instagram"></i></a> </li>
                  <li class="list-inline-item"><a class="text-white" href="#"><i class="lab la-pinterest-p"></i></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="header-wrap">
      <div class="container">
        <div class="row"> 
          <!--menu start-->
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light position-static"> <a class="navbar-brand logo" href="index.html"> <img class="img-fluid" src="{{url('frontend/assets/images/logo.png')}}" alt=""> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-auto">
                  <li class="nav-item"> <a class="nav-link active" href="index.html">Home</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="about-us.html">About Us</a> </li>
                  <li class="nav-item dropdown position-static"> <a class="nav-link dropdown-toggle" href="#">Categories</a>
                    <div class="dropdown-menu w-100"> 
                      <!-- Tabs -->
                      <div class="container p-0">
                        <div class="row w-100 no-gutters">
                          <div class="col-lg-8 p-lg-3">
                            <div class="row">
                              <div class="col-12 col-md-3 col-sm-6"> 
                                <!-- Heading -->
                                <div class="mb-2 font-w-5 text-link">Clothing</div>
                                <!-- Links -->
                                <ul class="list-unstyled mb-6 mb-md-0">
                                  <li> <a href="#">Western Wear</a></li>
                                  <li> <a href="#">Fitness &amp; Outdoors</a></li>
                                  <li> <a href="#">Ethnic Wear</a></li>
                                  <li> <a href="#">Beach Clothing</a></li>
                                  <li> <a href="#">Swimsuits</a></li>
                                  <li> <a href="#">Casual Dresses</a></li>
                                  <li> <a href="#">Raincoats</a></li>
                                  <li> <a href="#">Maternity</a></li>
                                  <li> <a href="#">Lingerie</a></li>
                                  <li> <a href="#">Sleep &amp; Lounge Wear</a></li>
                                </ul>
                              </div>
                              <div class="col-12 col-md-3 col-sm-6"> 
                                <!-- Heading -->
                                <div class="mb-2 font-w-5 text-link">Accessories</div>
                                <!-- Links -->
                                <ul class="list-unstyled mb-6 mb-md-0">
                                  <li> <a href="#">Caps &amp; Hats</a> </li>
                                  <li> <a href="#">Gloves &amp; Arm Warmers</a></li>
                                  <li> <a href="#">Earmuffs</a></li>
                                  <li> <a href="#">Handkerchiefs</a></li>
                                  <li> <a href="#">Shawls</a></li>
                                  <li> <a href="#">Belts</a></li>
                                  <li> <a href="#">Suspenders</a></li>
                                  <li> <a href="#">Wallets</a></li>
                                  <li> <a href="#">Pocket Squares</a></li>
                                  <li> <a href="#">Watches</a></li>
                                </ul>
                              </div>
                              <div class="col-12 col-md-3 col-sm-6"> 
                                <!-- Heading -->
                                <div class="mb-2 font-w-5 text-link">Jwellery</div>
                                <!-- Links -->
                                <ul class="list-unstyled mb-6 mb-md-0">
                                  <li> <a href="#">Earrings</a> </li>
                                  <li> <a href="#">Chains &amp; Necklaces</a></li>
                                  <li> <a href="#">Bangles &amp; Bracelets</a></li>
                                  <li> <a href="#">Pendants</a></li>
                                  <li> <a href="#">Anklets</a></li>
                                  <li> <a href="#">Coins &amp; Bars</a></li>
                                  <li> <a href="#">Nose Rings &amp; Pins</a></li>
                                  <li> <a href="#">Beads &amp; Charms</a></li>
                                  <li> <a href="#">Shirt Accessories</a></li>
                                  <li> <a href="#">Chains</a></li>
                                </ul>
                              </div>
                              <div class="col-12 col-md-3 col-sm-6"> 
                                <!-- Heading -->
                                <div class="mb-2 font-w-5 text-link">Shoes</div>
                                <!-- Links -->
                                <ul class="list-unstyled mb-0">
                                  <li> <a href="#">Running Shoes</a> </li>
                                  <li> <a href="#">Sneakers</a></li>
                                  <li> <a href="#">Loafers &amp; Moccasins</a></li>
                                  <li> <a href="#">Boots</a></li>
                                  <li> <a href="#">Formal Shoes</a></li>
                                  <li> <a href="#">Hiking Footwear</a></li>
                                  <li> <a href="#">Casual Shoes</a></li>
                                  <li> <a href="#">Ethnic Footwear</a></li>
                                  <li> <a href="#">Fashion Slippers</a></li>
                                  <li> <a href="#">Ballet Flats</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 d-none d-lg-block pr-2"> <img class="img-fluid rounded-bottom rounded-top" src="{{url('frontend/assets/images/header-img.jpg')}}" alt="..."> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="product-grid-left-sidebar.html">Shop</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="blog-grid.html">Blog</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact</a> </li>
                </ul>
              </div>
              <div class="right-nav align-items-center d-flex justify-content-end">
                <div class="mr-1 mr-sm-3 search-block"> <a href="javascript:void(0);" class="search_trigger ml-3"><i class="las la-search"></i></a>
                  <div class="search_wrap container"> <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                    <form>
                      <input type="text" placeholder="Search" class="form-control" id="search_input">
                      <button type="submit" class="search_icon"><i class="las la-search"></i></button>
                    </form>
                  </div>
                </div>
                <a class="mr-1 mr-sm-3" href="#"><i class="las la-user-alt"></i></a> <a class="mr-3 d-none d-sm-inline" href="#"><i class="lar la-heart"></i></a>
                <div class="dropdown cart_dropdown"> <a class="d-flex align-items-center" href="#"> <span class="bg-white pr-2 pl-0 py-1 rounded" data-cart-items="2"> <i class="las la-shopping-bag"></i> </span> </a>
                  <div class="cart_box dropdown-menu dropdown-menu-right">
                    <ul class="cart_list">
                      <li> <a href="#" class="item_remove"><i class="ion-ios-close-empty"></i></a> <a href="#"><img src="{{url('frontend/assets/images/product/p8.jpg')}}" alt="cart_thumb1">Unpaired Running Shoes</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span> </li>
                      <li> <a href="#" class="item_remove"><i class="ion-ios-close-empty"></i></a> <a href="#"><img src="{{url('frontend/assets/images/product/p12.jpg')}}" alt="cart_thumb2">Unpaired Running Shoes</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span> </li>
                    </ul>
                    <div class="cart_footer">
                      <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                      <p class="cart_buttons"><a href="#" class="btn btn-secondary view-cart ml-2 mr-2">View Cart</a><a href="#" class="btn btn-primary ml-2 mr-2 checkout">Checkout</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <!--menu end--> 
        </div>
      </div>
    </div>
  </header>

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
  
  
  
 

@endection