
<div>
   
    <div class="page-header" style="padding-top: 4rem;">
        <div class="container min-vh-75" loading="lazy"
            style="background-image: url('../assets/img/office-dark.jpeg'); 
            height: 300px; position: relative;
            width: 70%;
             background-size: cover; background-position: center center; border-radius: 20px;">
        </div>
    </div>
    
        <section class="py-5 mt-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 ms-auto me-auto">
        <h6 class="opacity-7 text-uppercase font-weight-bolder text-sm">The Idea</h6>
        <h3 class="title mb-4"> {{ $blog->title ?? 0 }} </h3>
        <p class="">
            {{ $blog->body ?? 0 }} 
        <br> <br>
 
        </div>
        </div>
    </div>
    </section>


    <section class="py-7">
        <div class="container">
        <div class="row">
        <div class="col-9 text-center mx-auto">
        <h3 class="mb-5">See other articles</h3>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <a href="javascript:;" class="d-block blur-shadow-image">
        <img src="../../assets/img/anastasia.jpg" class="img-fluid border-radius-md" alt="anastasia">
        </a>
        <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/anastasia.jpg&quot;);"></div></div>
        <div class="card-body">
        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold">House</span>
        <a href="javascript:;" class="card-title mt-3 h5 d-block text-darker">
        Shared Coworking
        </a>
        <p class="card-description mb-4">
        Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
        </p>
        <div class="author align-items-center">
 {{--        <img src="../../assets/img/team-2.jpg" alt="..." class="avatar shadow"> --}}
        <div class="name ps-2">
        <span>Mathew Glock</span>
        <div class="stats">
        <small>Posted on 28 February</small>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <a href="javascript:;" class="d-block blur-shadow-image">
        <img src="../../assets/img/nastuh.jpg" class="img-fluid border-radius-md" alt="nastuh">
        </a>
        <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/nastuh.jpg&quot;);"></div></div>
        <div class="card-body">
        <span class="text-gradient text-info text-uppercase text-xs font-weight-bold">House</span>
        <a href="javascript:;" class="text-darker card-title mt-3 h5 d-block">
        Really Housekeeping
        </a>
        <p class="card-description mb-4">
        Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
        </p>
        <div class="author align-items-center">
       {{--  <img src="../../assets/img/ivana-squares.jpg" alt="ivana" class="avatar shadow"> --}}
        <div class="name ps-2">
        <span>Mathew Glock</span>
        <div class="stats">
        <small>Posted on 28 February</small>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <a href="javascript:;" class="d-block blur-shadow-image">
        <img src="../../assets/img/annie-spratt.jpg" class="img-fluid border-radius-md" alt="annie">
        </a>
        <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/annie-spratt.jpg&quot;);"></div></div>
        <div class="card-body">
        <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold">House</span>
        <a href="javascript:;" class="text-darker card-title mt-3 h5 d-block">
        Shared Coworking
        </a>
        <p class="card-description mb-4">
        Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
        </p>
        <div class="author align-items-center">
       
        <div class="name ps-2">
        <span>Mathew Glock</span>
        <div class="stats">
        <small>Posted on 28 February</small>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>


           
        <style>
            .page-header {
                  position: relative;
                  overflow: hidden;
                  display: flex;
                  align-items: center;
                  background-size: cover;
                  background-position: 50%;
              } 
              .min-vh-85 {
          min-height: 85vh !important;
      }
      
      .border-top-start-radius-0 {
          border-top-left-radius: 0;
      }
      .border-top-end-radius-0 {
          border-top-right-radius: 0;
      }
      .border-bottom-end-radius-0 {
          border-bottom-right-radius: 0;
      }
      .border-radius-lg {
          border-radius: .75rem;
      }
      @media (min-width: 768px) {
          .d-md-block {
              display: block !important;
          }
      }
      @media (min-width: 576px) {
          .d-sm-none {
              display: none !important;
          }
      }
      .z-index-0 {
          z-index: 0 !important;
      }
      .ms-auto {
          margin-left: auto !important;
      }
      .h-100 {
          height: 100% !important;
      }
      .w-50 {
          width: 50% !important;
      }
      .position-absolute {
          position: absolute !important;
      }
      .d-none {
          display: none !important;
      }
      .fixed-bottom, .fixed-top {
          position: fixed;
          right: 0;
          left: 0;
          z-index: 1030;
      }
      .fixed-top {
          top: 0;
      }
      
      .text-gradient.text-primary {
          background-image: linear-gradient(310deg, #7928ca, #ff0080);
      }
      .text-gradient {
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          position: relative;
          z-index: 1;
      }
      .text-primary {
          color: #cb0c9f !important;
      }
      .mb-0 {
          margin-bottom: 0 !important;
      }
      .h1, .h2, .h3, .h4, h1, h2, h3, h4 {
          letter-spacing: -.05rem;
      }
      .h1, .h2, .h3, h1, h2, h3 {
          font-weight: 700;
      }
      .h1, h1 {
          font-size: 3rem;
          line-height: 1.25;
          letter-spacing: -.025rem;
      }
      
      
              </style>
</div>

  
