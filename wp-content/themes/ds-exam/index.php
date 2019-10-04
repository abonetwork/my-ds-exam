<?php get_header(); ?>

    
    <div class="slider1">
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Image 1.png" />
        <div class="slider-text">
          <h2>Let's Make Your <br />Best Trip Ever 1</h2>
          <p>
            We are committed to offering travel services of the highest quality,
            combining our energy and enthusiasm, with our years of experience.
          </p>
          <div class="btn book-tour btn--width">
            <i class="fa fa-paper-plane-o"></i> BOOK TOUR 1
          </div>
        </div>
      </div>
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Image 21.png" />
        <div class="slider-text">
          <h2>Let's Make Your <br />Best Trip Ever 2</h2>
          <p>
            We are committed to offering travel services of the highest quality,
            combining our energy and enthusiasm, with our years of experience.
          </p>
          <div class="btn book-tour btn--width">
            <i class="fa fa-paper-plane-o"></i> BOOK TOUR 2
          </div>
        </div>
      </div>
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Image 31.png" />
        <div class="slider-text">
          <h2>Let's Make Your <br />Best Trip Ever 3</h2>
          <p>
            We are committed to offering travel services of the highest quality,
            combining our energy and enthusiasm, with our years of experience.
          </p>
          <div class="btn book-tour btn--width">
            <i class="fa fa-paper-plane-o"></i> BOOK TOUR 3
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid featured">
      <div class="container cf">
        <h2>Featured Tours</h2>
        <p>
          Explore the world with Intense! We offer you a vast vatriety of tours
          of all types featuring both exotic and already well-known
          destinations, some of which are listed below.
        </p>
        <div>
         
        <?php 
        if(have_posts()){
            while(have_posts()): the_post();
        
        ?>
          
          <div class="col-4">
            <?php the_post_thumbnail('large')?>
            <h3><?php the_title();?></h3>
            <p>
              <?php the_excerpt()?>
            </p>
          </div>

        <?php endwhile;}?>
        </div>
      </div>
    </div>

    <div class="container-fluid best-tours">
      <div class="container ">
        <h2>We Provide Only the Best Tours</h2>
        <p>
          With more than 230 trips to worldwide destinations, including Europe,
          North & Central, South America, Asia, Australia & New Zealand, we
          continue to offer new ways and the best tours for traveling every
          year.
        </p>
        <a class="btn get-in-touch btn--width" id="btn-touch"
          ><i class="fa fa-paper-plane-o"></i> GET IN TOUCH</a
        >
      </div>
    </div>

    <div class="container-fluid why-us">
      <div class="container cf">
        <h2>Why Us?</h2>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-best-service.png" alt="the-best-service" />
          <h3>The Best Service</h3>
          <p>
            Our aim is to provide you with the tour service of the top quality,
            and we'll do our best to find the suitable tour for you.
          </p>
        </div>
        <div class="col-3">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-everything-inc.png"
            alt="everything-ist-included"
          />
          <h3>Everything ist included</h3>
          <p>
            There are dozens of aspects to pay attention to, while organizing a
            trip, and we’ll make sure your tour includes everything you need.
          </p>
        </div>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-great-prices.png" alt="great-prices" />
          <h3>Great Prices</h3>
          <p>
            All our tours and excursions are available at really affordable
            prices so you can always pick a great destination.
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid our-partners" id="">
      <div class="container cf">
        <h2>Our Partners</h2>
        <section class="customer-logos slider">
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-01-144x63.png" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-02-144x63.png" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-03-144x63.png" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-04-144x63.png" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-05-144x63.png" />
          </div>
          <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/client-06-144x63.png" />
          </div>
        </section>
      </div>
    </div>

    <div class="container-fluid testimonial" id="">
        <div class="container cf">
            <h2>What Our Client Say</h2>
            <div class="col-3">
                <table>
                    <tr>
                        <td style="padding-right: 11px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-1.png"  />
                        </td>
                        <td>
                            <p>
                                Disney in December was absolutely delightful! From our 1 day
                                at Magic Kingdom & 2 days at Animal Kingdom, our family was
                                filled with excitement and magical memories.
                            </p>
                            <span>-Lisa Evants</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-3">
                <table>
                    <tr>
                        <td style="padding-right: 11px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-2.png" />
                        </td>
                        <td>
                            <p>
                                You were an excellent Travel Agency for us! You considered our unique needs while planning our itinerary. Every
                                suggestion you made was excellent!
                            </p>
                            <span>-Nicholas Lane</span>
                           
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-3">
                <table>
                    <tr>
                        <td style="padding-right: 11px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-3.png" />
                        </td>
                        <td>
                            <p>
                                I’m sending you a sincere "thank you" for all of your assistance during my recent trip to Colorado. It was
                                invaluable to me and I realize and appreciate it greatly.
                            </p>
                            <span>-Ethan Dean</span>
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
        <div class="btn get-in-touch-client btn--width" id="btn-touch-client">
            <i class="fa fa-paper-plane-o"></i> GET IN TOUCH
        </div>
        
    </div>


    <div id="my-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
          <h2>Contact Us</h2>
        </div>
        <div class="modal-body ">
          <form action="">
            <div class="form-group input-group">
              <span class="input-group-addon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-user.png" class="name"></i></span>
              <input class="form-control" type="text" name="name" placeholder="Name" 
              />
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon "><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-phone.png" class="phone"></i></span>
                <input class="form-control" type="tel" name="phone" placeholder="Phone" />
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-email.png" class="email"></i></span>
                <input class="form-control" type="email" name="email" placeholder="Email"  />
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon msg--span"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/icon-msg.png" class="msg"></i></span>
                <textarea placeholder="Message" name="message"></textarea>
            </div>
            <div class="btn send-msg btn--width">
                <i class="fa fa-paper-plane-o"></i> SEND MESSAGE
            </div>
          </form>
        </div>
      </div>
    </div>


      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <!-- <script src="js/script.js"></script> -->

<?php get_footer(); ?>