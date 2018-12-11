<?php
/**
 * The Header for our theme.
 * @package Charity Fundraiser
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'charity-fundraiser' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="logo col-md-3 col-sm-3">
        <?php if( has_custom_logo() ){ charity_fundraiser_the_custom_logo();
         }else{ ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?> 
          <p class="site-description"><?php echo esc_html($description); ?></p>
        <?php endif; }?>
      </div>
      <div class="col-md-3">
        <div class="contact-details">
          <div class="row">
            <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
              <div class="col-md-2 p-0 conatct-font">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="col-md-8">
                <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
                  <p class="bold-font"><?php echo esc_html( get_theme_mod('charity_fundraiser_email_text',__('EMAIL','charity-fundraiser')) ); ?></p>
                <?php }?>
                <?php if ( get_theme_mod('charity_fundraiser_email','') != "" ) {?>
                  <p><?php echo esc_html( get_theme_mod('charity_fundraiser_email',__('Charity@example.com','charity-fundraiser')) ); ?></p>
                <?php }?>
              </div>
            <?php }?>
          </div>
        </div>
      </div>          
      <div class="col-md-3">
        <div class="contact-details">
          <div class="row">
            <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
              <div class="col-md-2 p-0 conatct-font">
                <i class="fas fa-phone"></i>
              </div>
              <div class="col-md-8">
                <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
                  <p class="bold-font"><?php echo esc_html( get_theme_mod('charity_fundraiser_call_text',__('CALL NOW','charity-fundraiser') )); ?></p>
                <?php }?>
                <?php if ( get_theme_mod('charity_fundraiser_call_number','') != "" ) {?>
                  <p><?php echo esc_html( get_theme_mod('charity_fundraiser_call_number',__('+00-123-456-789','charity-fundraiser') )); ?></p>
                <?php }?>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="social-media">
          <?php if( get_theme_mod( 'charity_fundraiser_facebook' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_twitter' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_twitter','' ) ); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_google') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_google','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_pintrest' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_insta' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_insta','' ) ); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_linkdin' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'charity_fundraiser_youtube' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_youtube','' ) ); ?>"><i class="fab fa-youtube"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>    
  <div id="header">
    <div class="container">
      <div class="menu-sec">
        <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','charity-fundraiser'); ?></a></div>
        <div class="row">
          <div class="menubox col-md-9 col-sm-9">
            <div class="nav">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
          <div class="search-box col-md-1 col-sm-1">
            <span><i class="fas fa-search"></i></span>
          </div>
          <?php if ( get_theme_mod('charity_fundraiser_donate_text','') != "" ) {?>
            <div class="col-md-2 col-sm-2 donate-link">              
              <a href="<?php echo esc_html( get_theme_mod('charity_fundraiser_donate_link',__('#','charity-fundraiser')) ); ?>"><i class="fas fa-heart"></i><?php echo esc_html( get_theme_mod('charity_fundraiser_donate_text',__('Donate Now','charity-fundraiser')) ); ?></a>              
            </div>
          <?php }?>
        </div>
        <div class="serach_outer">
          <div class="closepop"><i class="far fa-window-close"></i></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>