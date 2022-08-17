<!DOCTYPE html>

<html lang="en">
  <head>
      <div>
      @include('layout.header')
    </div>
  </head>

  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
  
      
    <div>
      @include('layout.navbar')

    </div>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/slider18.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/slider100.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(img/img10.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      {{-- about us --}}
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Welcome to College of Excellence</h2>
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
                  <h3>About School</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                 
                </div>
                 <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider10.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      {{-- features --}}
      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Features</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/notepad.png" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  
                  <h3>Notes</h3>
                  <p>Notes picked from teachers and students  collages and Universities</p>
<<<<<<< HEAD
                 
=======
                  <p><a href="/notes" class="btn btn-primary">Notes</a></p>
>>>>>>> editing
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/timetable.png" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  
                  <h3>Time Table</h3>
                  <p> Here you will get the University Realesed.
                    Time Table or Schedule of exams from here.</p>
                  <p><a href="#" class="btn btn-primary">Time table</a></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/archive.png" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  
                  <h3>Syallabus</h3>
                  <p>Find the UGC sysllabus of all the subjects
                  uploaded by admins

                  </p>
                  <p><a href="#" class="btn btn-primary">Syallabus</a></p>
                </div>
              </div>


              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/checklist.png" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  
                  <h3>Exam Paper</h3>
                  <p>Find the previous year papers.Here you will get the University Realesed.</p>
                  <p><a href="#" class="btn btn-primary">Exam paper</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      {{-- all number can counte --}}

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Certified Teachers</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Passing to Universities</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Parents Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

     
      {{-- highlight --}}

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all news</a></p>  
                    </div>
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all events</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

      
      
      
     
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Alumni Testimonial</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Why Choose Enlight School</h2>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Consectetur Adipisicing</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Aliquid Dolorum Saepe</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Eveniet Tempora Anisi</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Laboriosam Quod Dignissimos</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Asperiores Maxime Modi</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Libero Maxime Molestiae</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
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
    {{-- <script src="js/tawk.js"></script> --}}
    

  </body>
</html>