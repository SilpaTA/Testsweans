    			<section class="content-sec-one">
	    			<div class="row">
	    				<div class="col-lg-6 col-md-6">
	    					<div class="about-left">
	    						<?php if(get_field('main_heading')){ ?>
	    							<h1 class="common-heading"><?php echo get_field('main_heading'); ?></h1>
	    						<?php } if(get_field('content')){ ?>
	    							<p><?php echo get_field('content'); ?></p>
	    						<?php } ?>
	    						<div class="aboutbtnwarp d-flex">
	    							<?php 
										$link = get_field('button_link');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>

										    <a class="btn btn-blue mr-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
	    							
	    								
	    							
	    							<?php if(get_field('video_link')){ ?>
	    							<a href="<?php echo get_field('video_link'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/video.png"></a>
	    							<?php } ?>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-6 col-md-6">
	    					<div class="about-right">
	    						<?php 
	    						$aboutimg = get_field('about_image');
	    						if($aboutimg){ ?>
	    							<img src="<?php echo $aboutimg['url']; ?>" alt="<?php echo $aboutimg['alt']; ?>" class="img-fluid">
	    						<?php }
	    						?>
	    					</div>
	    				</div>
	    			</div>
    			</section>