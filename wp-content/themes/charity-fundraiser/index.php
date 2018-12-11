<?php
/**
 * The template for displaying home page.
 * @package Charity Fundraiser
 */

get_header(); ?>

<?php
    $left_right = get_theme_mod( 'charity_fundraiser_layout','Left Sidebar');
    if($left_right == 'Right Sidebar'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
        		<div class="container">  
                    <div class="row">      
                        <div class="col-md-9 col-sm-9">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                        'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                    	<div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
              		    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Left Sidebar'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
                        <div class="col-md-9 col-sm-9" >                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                        'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                    </div>                   
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'One Column'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">               
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                    'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>                   
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Three Columns'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-md-6 col-sm-6">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                        'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    </div>               
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Four Columns'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-md-3 col-sm-3">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                        'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3');?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>                    
                </div>
            </div>
        </div>
    <?php } ?>

<?php get_footer(); ?>