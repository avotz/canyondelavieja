<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canyon
 */

?>

	<footer class="footer">
        <div class="wrap">
            <div class="top">
              <div class="footer-box-container flex-container-sb">
                <div class="footer-box-item navigate">
                  <div class="content">
                    <span class="intro"><?php pll_e('Location'); ?></span>
                    <span class="title"><?php pll_e('Navigate to'); ?></span>

                  </div>
                  <a href="waze://?ll=10.6796248, -85.4562437&navigate=yes" class="btn success" target="_blank">Waze</a>
                  <a href="https://www.google.com/maps/place/Ca%C3%B1on+de+la+Vieja+Lodge/@10.6796248,-85.4562437,15z/data=!4m5!3m4!1s0x0:0x4e6f3a31a8e45943!8m2!3d10.6796248!4d-85.4562437?sa=X&ved=0ahUKEwjfob3wuLfZAhWyuVkKHeDTAGkQ_BIInQEwCg" class="btn success" target="_blank">Google Maps</a>
                </div>
                <div class="footer-box-item">
                  <div class="logos" align="center"><img src="<?php echo get_template_directory_uri(); ?>/img/CATURGUA.jpg" width="68" height="68"><img src="<?php echo get_template_directory_uri(); ?>/img/logocanatur.jpg" width="115"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ict.jpg" width="61" height="89"><img src="<?php echo get_template_directory_uri(); ?>/img/sostenible.jpg" width="85" height="86">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/codigo-conducta.png" width="85" height="86">
                  </div>
                 
                </div>
                <div class="footer-box-item">
                  <div class="content">
                   <span class="intro">(506) 2665-3161 - (506) 2665-5912</span>
                   <span class="title">info@thecanyonlodge.com</span>
                    <a href="<?php echo esc_url(home_url(pll__('/lodging-reservation-and-cancellation-policites-canyon-de-la-vieja-lodge'))); ?>"><?php pll_e('Terms & conditions'); ?></a>

                  </div>
                  <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="bottom">
                <div class="copy">
                  Cañón de la Vieja Guanacaste - Adventure Lodge &copy; 2018
                </div>
            </div>
        </div>
          
        </footer>
       

<?php wp_footer(); ?>

</body>
</html>
