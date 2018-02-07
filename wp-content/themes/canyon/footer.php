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
                <div class="footer-box-item">
                  <div class="content">
                    <span class="intro">loremp ipsum</span>
                    <span class="title">loremp ipsum dolor si</span>

                  </div>
                  <a href="#" class="btn success">Subscribe</a>
                </div>
                <div class="footer-box-item">
                  <div class="logos" align="center"><img src="<?php echo get_template_directory_uri(); ?>/img/CATURGUA.jpg" width="68" height="68"><img src="<?php echo get_template_directory_uri(); ?>/img/logocanatur.jpg" width="115"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ict.jpg" width="61" height="89"><img src="<?php echo get_template_directory_uri(); ?>/img/sostenible.jpg" width="85" height="86"></div>
                </div>
                <div class="footer-box-item">
                  <div class="content">
                   <span class="intro">(506) 2665-5912 - (506) 8512-2661</span>
                   <span class="title">info@thecanyonlodge.com</span>


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
