<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Home 
 * @package canyon
 */

get_header(); ?>

	<section class="banner">
           <div class="banner-container">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg"> -->
              <div class="banner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
              </div>
           </div>
        </section>
        <section class="main">
            <!-- <h2 class="main-title" data-text="Featured Tours">Featured Tours</h2> -->

                <div class="main-container flex-container-sb">
                    <div class="main-item size-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rooms.jpg">
                        <div class="main-item-info">
                          <span class="main-item-title">Rooms</span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. </p>
                           <a href="<?php echo esc_url(home_url('/rooms')); ?>" class="main-item-button">view more</a>
                        </div>
                        <!-- <a href="#" class="main-item-link"></a> -->
                    </div>
                     <div class="main-item highlight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg">
                         <div class="main-item-info">
                          <span class="main-item-title">Activities</span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. </p>
                           <a href="<?php echo esc_url(home_url('/activities')); ?>" class="main-item-button">view more</a>
                        </div>
                        <!-- <a href="#" class="main-item-link"></a> -->
                    </div>
                    <div class="main-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/packages.jpg">
                         <div class="main-item-info">
                          <span class="main-item-title">Packages</span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. </p>
                          <a href="<?php echo esc_url(home_url('/packages')); ?>" class="main-item-button">view more</a>
                        </div>
                        <!-- <a href="#" class="main-item-link"></a> -->
                    </div>
                    <div class="main-item size-2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IBfQXYe0-Lc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
        </section>
         
       <?php get_template_part( 'template-parts/content', 'featured-services' ); ?>
        
        <section class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15682.838880541123!2d-85.4562437!3d10.6796248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e6f3a31a8e45943!2sCa%C3%B1on+de+la+Vieja+Lodge!5e0!3m2!1ses-419!2scr!4v1519231133077" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
      </div> <!--wrap -->

<?php
//get_sidebar();
get_footer();
