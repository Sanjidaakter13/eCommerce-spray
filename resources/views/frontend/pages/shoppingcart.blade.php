@extends('frontend.template.master')

@section('frontend.content')


<!--hero section start-->

<section class="bg-light py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h2 mb-0">Product Cart</h1>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="link-title" href="#">Home</a>
            </li>
            <li class="breadcrumb-item"><a class="link-title" href="#">Shop</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Product Cart</li>
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
      <div class="col-lg-8">
        <div class="table-responsive">
          <table class="cart-table table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p10.jpg" alt="">
                    </a>
                    <div class="media-body ml-3">
                      <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                      </div>
                    </div>
                  </div>
                </td>
                <td> <span class="product-price text-muted">$35.00</span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                    </button>
                    <input class="form-product" type="number" name="form-product" value="1">
                    <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                    </button>
                  </div>
                </td>
                <td> <span class="product-price text-dark font-w-6">$35.00</span>
                  <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p13.jpg" alt="">
                    </a>
                    <div class="media-body ml-3">
                      <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                      </div>
                    </div>
                  </div>
                </td>
                <td> <span class="product-price text-muted">$39.00</span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                    </button>
                    <input class="form-product" type="number" name="form-product" value="1">
                    <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                    </button>
                  </div>
                </td>
                <td> <span class="product-price text-dark font-w-6">$39.00</span>
                 <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cart-thumb media align-items-center">
                    <a href="#">
                      <img class="img-fluid" src="assets/images/product/p11.jpg" alt="">
                    </a>
                    <div class="media-body ml-3">
                      <div class="product-title mb-2"><a class="link-title" href="#">Unpaired Running Shoes</a>
                      </div>
                    </div>
                  </div>
                </td>
                <td> <span class="product-price text-muted">$68.00</span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <button class="btn-product btn-product-up"> <i class="las la-minus"></i>
                    </button>
                    <input class="form-product" type="number" name="form-product" value="1">
                    <button class="btn-product btn-product-down"> <i class="las la-plus"></i>
                    </button>
                  </div>
                </td>
                <td> <span class="product-price text-dark font-w-6">$68.00</span>
                 <a href="#" class="close-link"><i class="las la-times"></i></a>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="col-lg-4 pl-lg-5 mt-8 mt-lg-0">
        <div class="border rounded p-5 bg-light-4">
          <h4 class="text-black text-left mb-2 font-w-6">Cart Totals</h4>
          <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Subtotal</span>  <span class="text-dark">$745.00</span> 
          </div>
          <div class="d-flex justify-content-between align-items-center border-bottom py-3"> <span class="text-muted">Tax</span>  <span class="text-dark">$06.00</span> 
          </div>
          <div class="d-flex justify-content-between align-items-center pt-3 mb-5"> <span class="text-dark h5">Total</span>  <span class="text-dark font-w-6 h5">$751.00</span> 
          </div> <a class="btn btn-primary btn-animated btn-block" href="product-checkout.html">Proceed To Checkout</a>
          <a class="btn btn-dark btn-animated mt-3 btn-block" href="#">Continue Shopping</a>
        </div>
      </div>
    </div>
    <div class="d-md-flex align-items-end justify-content-between py-5 px-5 mt-5 bg-light-4">
          <div>
            <label class="text-black h4" for="coupon">Coupon</label>
            <p>Enter your coupon code if you have one.</p>
            <div class="row form-row">
              <div class="col">
                <input class="form-control" id="coupon" placeholder="Coupon Code" type="text">
              </div>
              <div class="col col-auto">
                <button class="btn btn-dark btn-animated">Apply Coupon</button>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-animated mt-3 mt-md-0">Update Cart</button>
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
                  <input value="" name="EMAIL" class="email form-control input-2 bg-white" placeholder="Email Address" required type="email">
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