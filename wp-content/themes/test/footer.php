
<footer>

  <div class="newsletter">
  
    <div class="newsletter-box">
      <?php if(get_field('newsletter-title', 6)){ ?>
        <h2 class="common-heading"><?php echo get_field('newsletter-title', 6); ?></h2>
      <?php } if(get_field('desc-newsletter', 6)){ echo get_field('desc-newsletter', 6); }?>
      <div class="newsletterform"><?php echo do_shortcode('[mc4wp_form id=119]'); ?></div>
    </div>


</div>
  <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="ft-one">
                <?php if(is_active_sidebar('footer-logo-section')){ dynamic_sidebar('footer-logo-section'); } ?>
                <?php if(get_field('mail', 6)){ ?><p>
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/email-icon-pink-1.png"><a href="maitto:<?php echo get_field('mail', 6); ?>"><?php echo get_field('mail', 6); ?></a></p>
                <?php } if(get_field('address', 6)){ ?>
                <p><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/location.png"><span><?php echo get_field('address', 6); ?></span></p>
                <?php } ?>
                <div class="socialmedia">
                  <ul>
                    <?php if(get_field('facebook_', 6)){ ?>
                    <li><a href="<?php echo get_field('facebook_', 6); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/fb.png"></a></li>
                    <?php }if(get_field('linkedin', 6)){ ?>
                    <li><a href="<?php echo get_field('linkedin', 6); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/linkedin.png"></a></li>
                    <?php }if(get_field('instagram', 6)){ ?>
                    <li><a href="<?php echo get_field('instagram', 6); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/insta.png"></a></li>
                    <?php }  ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <?php if(is_active_sidebar('footer-two-section')){ dynamic_sidebar('footer-two-section'); } ?>
            </div>
            <div class="col-md-6 col-lg-3">
              <?php if(is_active_sidebar('footer-three-section')){ dynamic_sidebar('footer-three-section'); } ?>
            </div>
            <div class="col-md-6 col-lg-3">
              <?php if(is_active_sidebar('footer-four-section')){ dynamic_sidebar('footer-four-section'); } ?>
            </div>
          </div>
          <div class="row">
            <div class="copyrights"><p>Copyright @  <?php echo get_the_date( 'Y' ); ?>. All Rights Reserved.</p></div>
          </div>
        <div>
      </div>
  </div>
</footer>
<?php wp_footer(); ?> 
</body>
</html>