<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canyon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php canyon_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="contact-container flex-container-sb">
            <div class="contact-info">
                    <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form"]');
                    ?>    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15682.838880541123!2d-85.4562437!3d10.6796248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e6f3a31a8e45943!2sCa%C3%B1on+de+la+Vieja+Lodge!5e0!3m2!1ses-419!2scr!4v1519231133077" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>   
            </div>
            <div class="contact-media">
               <?php
                the_content();


                ?>
            </div>
        </div>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
