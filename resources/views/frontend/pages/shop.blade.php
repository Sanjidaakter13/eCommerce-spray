@extends('frontend.template.master')

@section('frontend.content')

<section class="bg-light py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h2 mb-0">Shop Grid Left Sidebar</h1>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="link-title" href="#">Home</a>
            </li>
            <li class="breadcrumb-item"><a class="link-title" href="#">Shop</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Shop Grid Left Sidebar</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-12 order-lg-1">
        <div class="row mb-4 align-items-center">
          <div class="col-md-5 mb-3 mb-md-0"> <span class="text-dark">Showing 1 to 12 of 30 total</span>
          </div>
          <div class="col-md-7 d-flex align-items-center justify-content-md-end">
            <div class="view-filter"> <a class="active" href="shop-grid-left-sidebar.html"><i class="las la-th-large"></i></a>
              <a href="shop-list-left-sidebar.html"><i class="las la-bars"></i></a>
            </div>
            <div class="sort-filter ml-2 d-flex align-items-center">
              <select class="custom-select" id="inputGroupSelect02">
                <option selected>Default sorting</option>
                <option value="1">Newest Item</option>
                <option value="2">Populer</option>
                <option value="3">Best Match</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="card product-card card--default rounded-0">
                        <div class="sale-label">-15%</div>
                        <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-back" src="{{url('frontend/assets/images/product/p10.jpg')}}" alt="..."> <img class="card-img-front" src="assets/images/product/p10_hover.jpg" alt="..."> </a>
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
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="card product-card card--default rounded-0"> <a class="card-img-hover d-block" href="product-default.html"> <img class="card-img-back" src="{{url('frontend/assets/images/product/p13.jpg')}}" alt="..."> <img class="card-img-front" src="assets/images/product/p13_hover.jpg" alt="..."> </a>
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
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-end">
            <li class="page-item"><a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3 col-md-12 sidebar mt-8 mt-lg-0">
        <div>
          <div class="widget widget-categories mb-4 border rounded p-4">
            <h5 class="widget-title mb-3">Categories</h5>
            <div id="accordion" class="accordion">
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Clothing</a>
              </h6>
                </div>
                <div id="collapse1" class="collapse show" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                                  <li> <a href="#">Western Wear</a></li>
                                  <li> <a href="#">Fitness &amp; Outdoors</a></li>
                                  <li> <a href="#">Ethnic Wear</a></li>
                                  <li> <a href="#">Beach Clothing</a></li>
                                  <li> <a href="#">Swimsuits</a></li>
                                  <li> <a href="#">Casual Dresses</a></li>
                                  <li> <a href="#">Raincoats</a></li>
                                  <li> <a href="#">Sleep &amp; Lounge Wear</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Accessories</a>
              </h6>
                </div>
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Handkerchiefs</a>
                      </li>
                      <li><a href="#">Suspenders</a>
                      </li>
                      <li><a href="#">Pocket Squares</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Jewellery</a>
              </h6>
                </div>
                <div id="collapse3" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Chains & Necklaces</a>
                      </li>
                      <li><a href="#">Earrings</a>
                      </li>
                      <li><a href="#">Pendants</a>
                      </li>
                      <li><a href="#">Bangles & Bracelets</a>
                      </li>
                      <li><a href="#">Anklets</a>
                      </li>
                      <li><a href="#">Nose Rings & Pins</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Footwear</a>
              </h6>
                </div>
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Running Shoes</a>
                      </li>
                      <li><a href="#">Sneakers</a>
                      </li>
                      <li><a href="#">Casual Shoes</a>
                      </li>
                      <li><a href="#">Formal Shoes</a>
                      </li>
                      <li><a href="#">Hiking Footwear</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Electronics</a>
              </h6>
                </div>
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Cameras</a>
                      </li>
                      <li><a href="#">Television</a>
                      </li>
                      <li><a href="#">Computers</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse6">Watches</a>
              </h6>
                </div>
                <div id="collapse6" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Waterproof</a>
                      </li>
                      <li><a href="#">Sports</a>
                      </li>
                      <li><a href="#">Stylish</a>
                      </li>
                      <li><a href="#">Metal</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="widget widget-brand mb-4 border rounded p-4">
            <h5 class="widget-title mb-3">Price</h5>
           <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck1">
              <label class="custom-control-label" for="priceCheck1">Under $10</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck1">
              <label class="custom-control-label" for="priceCheck1">$10 - $100</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck2">
              <label class="custom-control-label" for="priceCheck2">$100 - $200</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck3">
              <label class="custom-control-label" for="priceCheck3">$200 - $300</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck4">
              <label class="custom-control-label" for="priceCheck4">$300 - $400</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="priceCheck5">
              <label class="custom-control-label" for="priceCheck5">$400 - $1000</label>
            </div>
          </div>
          <div class="widget widget-brand mb-4 border rounded p-4">
            <h5 class="widget-title mb-3">Brand</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck1">
              <label class="custom-control-label" for="brandCheck1">Covmed</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck2">
              <label class="custom-control-label" for="brandCheck2">Tiagoo</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck3">
              <label class="custom-control-label" for="brandCheck3">Organtic</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck4">
              <label class="custom-control-label" for="brandCheck4">Dealsdot</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck5">
              <label class="custom-control-label" for="brandCheck5">Harrier</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brandCheck6">
              <label class="custom-control-label" for="brandCheck6">Unicorn</label>
            </div>
          </div>
          <div class="widget widget-color mb-4 border rounded p-4">
            <h5 class="widget-title mb-3">Color</h5>
            <ul class="list-inline">
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter1" name="Radios">
                  <label class="form-check-label" for="color-filter1" data-bg-color="#3cb371"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter2" name="Radios" checked>
                  <label class="form-check-label" for="color-filter2" data-bg-color="#4876ff"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter3" name="Radios">
                  <label class="form-check-label" for="color-filter3" data-bg-color="#0a1b2b"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter4" name="Radios">
                  <label class="form-check-label" for="color-filter4" data-bg-color="#f94f15"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter5" name="Radios">
                  <label class="form-check-label" for="color-filter5" data-bg-color="#FF00FF"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter6" name="Radios">
                  <label class="form-check-label" for="color-filter6" data-bg-color="#ffc300"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter7" name="Radios">
                  <label class="form-check-label" for="color-filter7" data-bg-color="#808080"></label>
                </div>
              </li>
              <li>
                <div class="form-check pl-0">
                  <input type="radio" class="form-check-input" id="color-filter8" name="Radios">
                  <label class="form-check-label" for="color-filter8" data-bg-color="#008080"></label>
                </div>
              </li>
            </ul>
          </div>
          <div class="widget widget-size mb-4 border rounded p-4">
            <h5 class="widget-title mb-3">Size</h5>
            <ul class="list-inline clearfix">
              <li>
                <input name="sc" id="xs-size" type="radio">
                <label for="xs-size">XS</label>
              </li>
              <li>
                <input name="sc" id="s-size" type="radio">
                <label for="s-size">S</label>
              </li>
              <li>
                <input name="sc" id="m-size" checked="" type="radio">
                <label for="m-size">M</label>
              </li>
              <li>
                <input name="sc" id="l-size" type="radio">
                <label for="l-size">L</label>
              </li>
              <li>
                <input name="sc" id="xl-size" type="radio">
                <label for="xl-size">XL</label>
              </li>
            
             
             
            </ul>
          </div>
           <div class="widget mb-4">
          <div class="position-relative rounded overflow-hidden"> 
            <!-- Background --> 
            <img class="img-fluid hover-zoom" src="{{url('frontend/assets/images/product-ad/side-banner.jpg')}}" alt=""> 
            <!-- Body -->
            <div class="position-absolute top-50 pl-5 side-banner">
              <h6 class="text-dark">Todays Deals</h6>
              <!-- Heading -->
              <h4 class="font-w-6 text-dark">Accessories <br>
                Special</h4>
              <!-- Link --> <a class="more-link" href="#">Shop Now </a> </div>
          </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

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



@endsection