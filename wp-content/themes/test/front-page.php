<?php get_header(); ?>
<content>
    <div class="container-fluid">
    	<div class="row justify-content-center">
    		<div class="col-12 col-lg-10">
    			<!--About----->
    			<?php get_template_part( 'template-parts/home/home', 'about' );
    			get_template_part( 'template-parts/home/home', 'logo' );
    			get_template_part( 'template-parts/home/home', 'thirdsec' );
    			get_template_part( 'template-parts/home/home', 'services' );?>
    		
		    	
	
		    	<section class="content-sec-four">
		    		<div class="row">
		    			<div class="col-lg-6 col-md-6">
		    				<div class="img-sec">
		    					<?php if(get_field('home_section_4_image')){ ?>
		    						<img src="<?php echo get_field('home_section_4_image')['url'];?>">
		    					<?php }?>
		    				</div>
		    			</div>
		    			<div class="col-lg-6 col-md-6">
		    				<div class="cnt-sec-four cnt-sec">
		    					<?php if(get_field('home_section_4_title')){ ?>
	    							<h2 class="common-heading"><?php echo get_field('home_section_4_title'); ?></h2>
	    						<?php } if(get_field('home_section_4_description')){echo get_field('home_section_4_description');} 
	    						$link_btn = get_field('button_section4');
										if( $link_btn ): 
										    $link_url = $link_btn['url'];
										    $link_title = $link_btn['title'];
										    $link_target = $link_btn['target'] ? $link_btn['target'] : '_self';
										    ?>

										    <a class="black-btn btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
	    							
	    					
		    				</div>
		    			</div>
		    		</div>
		    	</section>
    	
    </div>
</content>
<?php get_footer(); ?>