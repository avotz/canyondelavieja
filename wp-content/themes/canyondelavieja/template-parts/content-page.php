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
		
			<?php $images = rwmb_meta('rw_gallery', 'type=image&size=item-gallery-medium');
			
			if ($images) : ?>
				
					 <div id="slider-gallery" class="gallery slider-gallery page-gallery">
				
						<?php foreach ($images as $image) { ?>

							<div class="item" style="background-image: url('<?php echo $image['url'] ?>');"></div>
							
						<?php 
																				} ?>
					</div>
			<?php else : ?>

				<?php if (has_post_thumbnail()) : 
			
							$id = get_post_thumbnail_id($post->ID);
						$thumb_url = wp_get_attachment_image_src($id, 'item-gallery', true);
						?>
						 <div id="slider-gallery" class="gallery slider-gallery page-gallery">
								<div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
									
								</div>
						
						</div>
						
				<?php endif; ?>

					
						
				<?php endif; ?>
		
		<?php
			the_content();

			
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
