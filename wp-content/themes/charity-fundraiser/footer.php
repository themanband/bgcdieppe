<?php
/**
 * The template for displaying the footer.
 * @package Charity Fundraiser
 */
?>
    <div  id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="footerinner">
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-1');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-2');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-3');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-4');?>
            </div>
          </div>
        </div>
      </div>
      <div class="inner">
          <div class="copyright text-center">
            <p><?php echo esc_html(get_theme_mod('charity_fundraiser_text',__('Chairty WordPress Theme By','charity-fundraiser'))); ?> <?php charity_fundraiser_credit_link(); ?></p>
          </div>
          <div class="clear"></div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>