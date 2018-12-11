<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('charity_fundraiser_above_slider_section'); ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
    <?php $pages = array();
      for ( $count = 1; $count <= 3; $count++ ) {
        $mod = intval( get_theme_mod( 'charity_fundraiser_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $pages[] = $mod;
        }
      }
      if( !empty($pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2 class="animated fadeInDown"><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
              <div class="more-btn">              
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','charity-fundraiser'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; 
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>  
  <div class="clearfix"></div>
</section>

<?php do_action('charity_fundraiser_above_contact_section'); ?>

<section id="help">
  <div class="container">
    <?php if( get_theme_mod('charity_fundraiser_help_title') != ''){ ?>
      <h3 class="animated fadeInDown"><?php echo esc_html(get_theme_mod('charity_fundraiser_help_title',__('HELP FOR CAUSES','charity-fundraiser'))); ?></h3>
      <div class="border-image">
        <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/tittle-line.png') ); ?>" alt="">
      </div>
    <?php }?>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <?php
          $args = array( 'name' => get_theme_mod('charity_fundraiser_image_post',''));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="box-image animated fadeInDown">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
            <?php endwhile; 
            wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
        endif; ?>
      </div>
      <div class="col-md-6 col-sm-6">
        <?php if( get_theme_mod('charity_fundraiser_causes_title') != ''){ ?>
          <h4 class="animated fadeInDown"><?php echo esc_html(get_theme_mod('charity_fundraiser_causes_title',__('HOW CAN YOU HELP US ?','charity-fundraiser'))); ?></h4>
          <hr class="help">
        <?php }?>
        <?php 
          $page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('charity_fundraiser_help_category'),'theblog')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="row animated fadeInDown">
                <div class="col-md-3 col-sm-3">
                  <img src="<?php the_post_thumbnail_url(); ?>" />
                </div>
                <div class="col-md-9 col-sm-9">
                  <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( charity_fundraiser_string_limit_words( $excerpt,15 ) ); ?></p>
                </div>
              </div>
          <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>

<?php do_action('charity_fundraiser_after_about_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>