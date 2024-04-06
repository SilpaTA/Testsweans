<!---Section 2--->
		    	<section class="content-sec-two">
		    		<div class="row">
		    			<div class="col-lg-6 col-md-6">
		    				<div class="img-sec">
		    					<?php if(get_field('home_section_1_image')){ ?>
		    						<img src="<?php echo get_field('home_section_1_image')['url'];?>">
		    					<?php }?>
		    				</div>
		    			</div>
		    			<div class="col-lg-6 col-md-6">
		    				<div class="cnt-sec">
		    					<?php if(get_field('home_section_1_title')){ ?>
	    							<h2 class="common-heading"><?php echo get_field('home_section_1_title'); ?></h2>
	    						<?php } if(get_field('home_section_1_description')){ ?>
	    							<?php echo get_field('home_section_1_description'); ?>
	    						<?php } ?>
		    				</div>
		    			</div>
		    		</div>
		    	</section>
		    	<!---Section 2--->