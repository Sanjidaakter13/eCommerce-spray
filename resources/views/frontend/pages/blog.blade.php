@extends('frontend.template.master')

@section('frontend.content')




<!--hero section start-->

<section class="bg-light py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h2 mb-0">Blog Grid</h1>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="link-title" href="#">Home</a>
            </li>
            <li class="breadcrumb-item"><a class="link-title" href="#">Blog</a></li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Blog Grid</li>
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

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 col-md-6">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">05 Feb</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/01.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5 mt-md-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">09 Mar</div>
              <video id="clip1" class="rounded" width="100%" muted="" autoplay preload="" loop poster="{{url('frontend/assets/images/blog/video-image.jpg')}}" style="object-fit: cover; min-height:240px;
    z-index: -100;">
                <source src="{{url('frontend/assets/images/blog/fashion-videos.mp4')}}" type="video/mp4">
              </video>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Clothing,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Footwear,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Accessories</a> </div>
                <h2 class="h5 font-w-5 mt-2"> <a class="link-title" href="blog-detail.html">Premium template with unlimited colours, and fully Customizable</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5 mt-lg-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden bg-light-4">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">12 Mar</div>
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
                <audio controls autoplay="" style="object-fit: cover; min-width:350px">
                  <source src="{{url('frontend/assets/images/blog/audio.mp3')}}" type="audio/mpeg">
                </audio>
              </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Sleepwear,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Jwellery,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Fashion</a> </div>
                <h2 class="h5 font-w-5 mt-2"> <a class="link-title" href="blog-detail.html">Awesome template with lot's of features on the board!</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">18 May</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/04.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">The best accessories to add into your wardrobe before summer</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">27 May</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/06.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">Recognizing the need is the primary condition for design</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">13 June</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/05.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">Cruelty is one fashion statement we can all do without</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">19 June</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/08.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">I design to make women feel confident and beautiful fashion</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">07 Jul</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/07.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 col-md-6 mt-5">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
              <div class="position-relative rounded overflow-hidden">
                <div class="position-absolute z-index-1 bg-white text-pink text-center py-1 px-3 my-4">21 Jul</div>
                <img class="card-img-top hover-zoom" src="{{url('frontend/assets/images/blog/09.jpg')}}" alt="Image"> </div>
              <div class="card-body px-0 pb-0">
                <div> <a class="d-inline-block link-title btn-link text-small" href="#">Shoes,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Dresses,</a> <a class="d-inline-block link-title btn-link text-small" href="#">Womens</a> </div>
                <h2 class="h5 font-w-5 mt-2 mb-0"> <a class="link-title" href="blog-detail.html">Everything I know about midi skirts and how to wear them</a> </h2>
              </div>
              <div></div>
            </div>
        <!-- End Blog Card -->
      </div>
    </div>
    <div class="row mt-10">
      <div class="col-12  justify-content-end">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
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