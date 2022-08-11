<!DOCTYPE html>

<html lang="en">
  <head>
    <div>@include('layout.header')</div>
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div>
        @include('layout.navbar')
  
      </div>  
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Notes Page</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>We Provied Certified Notes By Admin</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                 
                </div>
                {{-- <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>






      {{-- notes  --}}



<section>


  <div class="container">
          

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="semester" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/1.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
    
            <h3>First Semester
            </a>
            
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/2.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Second Semester
            </a>
            
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/3.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Third Semester
            </a>
            
          </div>
        </div>
      </div>
   
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/4.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
          
            <h3>Fourth Semmester
            </a>
            
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/5.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Five Semester
            </a>
         
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">

          <figure class="media">
            <img src="img/6.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
          
            <h3>Six Smester
            </a>
            
          </div>
        </div>
      </div>

    </div>
   
  
</section>

      
      
      
  
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div>
          @include('layout.footer') 
          </div> 
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>