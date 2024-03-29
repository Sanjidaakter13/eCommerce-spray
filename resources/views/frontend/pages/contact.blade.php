@extends('frontend.template.master')

@section('frontend.content')



<!--hero section start-->

<section class="bg-light py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h2 mb-0">Contact Us</h1>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="link-title" href="#">Home</a>
            </li>
            <li class="breadcrumb-item"><a class="link-title" href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Contact Us</li>
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
    <div class="row mb-5">
      <div class="col-lg-7">
        
        <form id="contact-form" class="row" method="post" action="http://themesground.com/flipmarto/demo/html/php/contact.php">
            <div class="messages"></div>
            <div class="form-group col-md-6">
              <label>First Name <span class="text-danger">*</span></label>
              <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name" required data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Last Name <span class="text-danger">*</span></label>
              <input id="form_name1" type="text" name="name" class="form-control" placeholder="Last Name" required data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Email Address <span class="text-danger">*</span></label>
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <label>Phone Number <span class="text-danger">*</span></label>
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <label>Message <span class="text-danger">*</span></label>
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 mt-4">
              <button class="btn btn-primary btn-animated"><span>Submit</span>
              </button>
            </div>
          </form>
      </div>
      <div class="col-lg-5 mt-6 mt-lg-0">
        <div class="border-0 rounded p-5 bg-dark-1 contact-info">
         
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-map-marker-alt ic-2x text-primary"></i></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">We are located here for you</h6>
            <p class="mb-0">Flipmarto, 789 Main rd, Anytown, CA 12345 USA</p>
          </div>
        </div>
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-envelope ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">We're here for you! Just get answers</h6>
            <a href="#">info@domain.com / services@domain.com</a>
          </div>
        </div>
        <div class="d-flex mb-4 border-bottom pb-4">
          <div class="mr-2"> <i class="las la-mobile ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">Have any questions? Reach us by phone</h6>
            <a href="#">1-800-222-000 / 1-800-222-002</a>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="mr-2"> <i class="las la-pen ic-2x text-primary"></i>
          </div>
          <div>
            <h6 class="mb-1 text-white">Explore most popular help topics</h6>
            <span>Lorem ipsum is simply dummy text typesetting</span>
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