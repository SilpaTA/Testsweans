	    	<section class="content-sec-three">
		    		<div class="row">
		    			<div class="col-lg-6 col-md-6">
		    				<div class="service-cnt-box">
		    					<?php if(get_field('service_title')){ ?>
	    							<h2 class="common-heading"><?php echo get_field('service_title'); ?></h2>
	    						<?php } ?>
	    						<div class="row">
	    							<?php
				    				$args = array(
				    					'post_type'=> 'services', 
				    					'post_status' => 'publish', 
				    					'order' => 'ASC'
				    				);
				    				$query = new WP_Query($args);
				    				if($query->have_posts()) :
				    				while($query->have_posts()) : $query->the_post();
				    				?>
	    							<div class="col-lg-6 col-md-6">
	    								<div class="srvc-box">
	    									<?php if(get_field('icon')){ ?>
		    									<img src="<?php echo get_field('icon')['url'];?>" class="img-fluid">
		    								<?php }?>
	    									<h3><?php the_title(); ?></h3>
	    									<?php the_content(); ?>
	    								</div>
	    							</div>
	    							<?php 
										endwhile;
										wp_reset_postdata();
										endif;
										
									?>
	    						</div>
		    				</div>
		    			</div>
		    			<div class="col-lg-6 col-md-6">
		    				<div class="img-sec">
		    					<?php if(get_field('service_image')){ ?>
		    						<img src="<?php echo get_field('service_image')['url'];?>">
		    					<?php }?>
		    				</div>
		    			</div>
		    		</div>
		    	</section>