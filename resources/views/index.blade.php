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
                  <h3>About Us</h3>
                  <p>we provide every single piece of information about the student query     
                    (exam schedules, admission schedule, admission merit lists, News, Events, and the notification slide for every day update ) in simple UI design.</p>
                  <p><a href="#" class="js-backtotop btn btn-primary">Learn More</a></p>
                 
                </div>
                 <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/col3.jpg)">
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
              <h2>Our Features</h2>I liked it that I took this course online because I was able to do everything in my own time and it was easier for me to complete all the assignments. The course contents are precise and my tutor is knowledgeable.
              <p class="lead"></p>
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


                  <p><a href="notes.show" class="btn btn-primary">Notes</a></p>

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
                  <p><a href="timetable.show" class="btn btn-primary">Time table</a></p>
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
                  <p>Find the UGC syllabus of all the subjects
                  uploaded by admins

                  </p>
                  <p><a href="syllabus.show" class="btn btn-primary">Syallabus</a></p>
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
                  <p>Find the previous year papers.Here you will get the University Realesed. will be provide</p>
                  <p><a href="exampaper.show" class="btn btn-primary">Exam paper</a></p>
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

     
      
      
      
     
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Student Reviews</h2>
              <p class="lead">Loved every minue studying and gained great knowledge. Looking forward to life as a life coach and being part of changing lives for the better.</p>
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
                    <blockquote class="quote">&ldquo;All notes were easy to read, and I found the homework challenging, but not impossible. I enjoyed researching! Very good. Lots of feedback!&rdquo; <cite class="author"> &mdash; <span>Mohit</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;be honest you cannot beat the services or the people that I have dealt with. I loved the business management course. I rely on what I have learnt in my course often.&rdquo; <cite class="author"> &mdash;<span> Ramesh</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;I would like to thank you for the helpful guidance pro
                      vided by the tutorial department. I am happy with my tutor who is very efficient and s
                      hared his knowledge and experience with me.&rdquo; <cite class="author">&mdash; <span>Mohammed</span></cite></blockquote>
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
              <h2>Why Choose CollegeSpace</h2>
              <p class="lead">We only focused on helping innocent students with there doubts.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Providing Note</h3>
                  <p>Notes picked from teachers and students from respected collages and Universities</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                {{-- <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Relivent Syallabus</h3>
                  <p>very structure form of Sysllabus uploaded by teachers and admins </p>
                </div> --}}
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Student Support </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Time Table</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Exam Paper</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                {{-- <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Libero Maxime Molestiae</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                </div> --}}
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
    <script src="js/tawk.js"></script>
    

  </body>
</html>