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
              <h1 class="sub">Subject Page</h1>
              <p>Choose Your Subject Notes</p>
            </div>
          </div>
        </div>
      </section>

     






      {{-- subject --}}



<section class="probootstrap-section">


  <div class="container">
          

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
    
            <h3>C ++</h3>
            
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Web Technology</h3>
            
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Web Technology</h3>
            
          </div>
        </div>
      </div>
   
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
          
            <h3>Web Technology</h3>
            
          </div>
        </div>
      </div>
     

      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Web Technology</h3>
            


          </a>
          </div>
        </div>
      </div>
     
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <a href="#" class="probootstrap-featured-news-box">
          <figure class="media">
            <img src="img/books.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
          </figure>
          <div class="text">
           
            <h3>Web Technology</h3>
            


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