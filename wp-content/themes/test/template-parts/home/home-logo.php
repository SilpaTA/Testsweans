	<!----Logo slider--->
   				<section class="content-sec-slider">
   					<div class="row justify-content-center">
   						<div class="col-md-12 col-lg-6">
   							<div class="slick-slider">
   							<?php
			    				$args = array(
			    					'post_type'=> 'logo', 
			    					'post_status' => 'publish', 
			    					'order' => 'DESC'
			    				);
			    				$query = new WP_Query($args);
			    				if($query->have_posts()) :
			    				while($query->have_posts()) : $query->the_post();
			    			?>
				    			<div class="element element-1 col-3">
				    				<?php if(has_post_thumbnail()) {  
	    								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
				    						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
				    					<?php } ?>
				    			</div>
				    			<?php 
									endwhile;
									wp_reset_postdata();
									endif; 
								?>
			    			</div>
   						</div>
   					</div>
   				</section>