<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canyon
 */

?>

<section class="services">
	<div class="services-container">
		<div class="rooms">
			<div class="services-header">
			<h2 class="rooms-title services-title">Rooms</h2>
			<a href="<?php echo esc_url(home_url('/rooms')); ?>">View more</a>
			</div>
			<article class="rooms-item services-item">
				<div class="rooms-item-img services-item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/room-1.jpg">
				</div>
				<div class="rooms-item-content services-item-content">
					<h3 class="services-item-title">loremp ipsum</h3>
					<div class="services-item-subtitle">loremp ipsum, loremp ipsum</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
				<div class="rooms-item-details services-item-details">
				<div class="top">
					<div class="price">$129</div>
				</div>
				<div class="bottom">
					<a href="#" class="btn success">Read more</a>
				</div>
				</div>
			</article>
			<article class="rooms-item services-item">
				<div class="rooms-item-img services-item-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/room-2.jpg">
				</div>
				<div class="rooms-item-content services-item-content">
					<h3 class="services-item-title">loremp ipsum</h3>
					<div class="services-item-subtitle">loremp ipsum, loremp ipsum</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
				</div>
				<div class="rooms-item-details services-item-details">
				<div class="top">
					<div class="price">$129</div>
				</div>
				<div class="bottom">
					<a href="#" class="btn success">Read more</a>
				</div>
				</div>
			</article>
			
		</div>

		<div class="tours">
			<div class="services-header">
			<h2 class="tours-title services-title">Featured Activities</h2>
			<a href="<?php echo esc_url(home_url('/activities')); ?>">View more</a>
			</div>
			<?php
					$args = array(
						'post_type' => 'product',
						'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
						'posts_per_page' => 3,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'activities'
							)
						)


					);


					$items = new WP_Query($args);
					// Pagination fix
					$temp_query = $wp_query;
					$wp_query = null;
					$wp_query = $items;
					$index = 0;
					if ($items->have_posts()) {
						while ($items->have_posts()) {
							$items->the_post();

							?>
				<?php if (has_post_thumbnail()) :

						$id = get_post_thumbnail_id($post->ID);
					$thumb_url = wp_get_attachment_image_src($id, 'item-home-thumb', true);

					?>
				<?php else :
						$thumb_url = ''; ?>     
								
					<?php endif; ?>
					<article class="tours-item services-item">
					<div class="tours-item-img services-item-img">
						<img src="<?php echo $thumb_url[0]; ?>">
					</div>
					<div class="tours-item-content services-item-content">
						<h3 class="services-item-title"><?php the_title(); ?></h3>
						<!-- <div class="services-item-subtitle">loremp ipsum, loremp ipsum</div> -->
							<?php the_excerpt(); ?>
					</div>
					<div class="tours-item-details services-item-details">
						<div class="top">
							<div class="price">
								<?php $currency = get_woocommerce_currency_symbol();

																																					$product = new WC_Product($post->ID); 
								/*echo $product->get_price_html();
								
								woocommerce_template_loop_price(); */
																																					echo $currency;

																																					if (get_post_meta(get_the_ID(), '_wc_display_cost', true))
																																						echo get_post_meta(get_the_ID(), '_wc_display_cost', true);
																																					else
																																						echo get_post_meta(get_the_ID(), '_wc_booking_cost', true) ?>
							</div>
						</div>
						<div class="bottom">
						<a href="<?php the_permalink(); ?>" class="btn success">Read more</a>
						</div>
					</div>
				</article>
				


				
				
				<?php

																					$index++;
																				}
																			}

																			?>
			
		</div>

		<div class="packages">
			<div class="services-header">
			<h2 class="packages-title services-title">Featured Packages</h2>
			<a href="<?php echo esc_url(home_url('/packages')); ?>">View more</a>
			</div>

			<?php
		$args = array(
			'post_type' => 'product',
			'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
			'posts_per_page' => 3,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => 'packages'
				)
			)


		);


		$items = new WP_Query($args);
					// Pagination fix
		$temp_query = $wp_query;
		$wp_query = null;
		$wp_query = $items;
		$index = 0;
		if ($items->have_posts()) {
			while ($items->have_posts()) {
				$items->the_post();

				?>
				<?php if (has_post_thumbnail()) :

				$id = get_post_thumbnail_id($post->ID);
				$thumb_url = wp_get_attachment_image_src($id, 'item-home-thumb', true);

				?>
					<?php else :
					$thumb_url = ''; ?>     
									
						<?php endif; ?>
						<article class="packages-item services-item">
						<div class="packages-item-img services-item-img">
							<img src="<?php echo $thumb_url[0]; ?>">
						</div>
						<div class="packages-item-content services-item-content">
							<h3 class="services-item-title"><?php the_title(); ?></h3>
							<!-- <div class="services-item-subtitle">loremp ipsum, loremp ipsum</div> -->
							<?php the_excerpt(); ?>
						</div>
						<div class="packages-item-details services-item-details">
						<div class="top">
							<div class="price">
								<?php $currency = get_woocommerce_currency_symbol();

								$product = new WC_Product($post->ID); 
										/*echo $product->get_price_html();
										
										woocommerce_template_loop_price(); */
								echo $currency;

								if (get_post_meta(get_the_ID(), '_wc_display_cost', true))
									echo get_post_meta(get_the_ID(), '_wc_display_cost', true);
								else
									echo get_post_meta(get_the_ID(), '_wc_booking_cost', true) ?>
							</div>
						</div>
						<div class="bottom">
							<a href="<?php the_permalink(); ?>" class="btn success">Read more</a>
						</div>
						</div>
					</article>
						
				
					
					<?php

				$index++;
			}
		}

		?>
			
			
			
		</div>
	</div>
</section>