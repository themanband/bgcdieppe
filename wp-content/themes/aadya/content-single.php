<?php
/**
 * Content Single
 *
 * Loop content in single post template (single.php)
 *
 * @package Aadya
 * @subpackage Aadya
 * @since Aadya 1.0.0
 */
?>
<?php 
	$aadya_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$aadya_display_post_page_nav = of_get_option('display_post_page_nav');
	$aadya_display_post_meta_info = of_get_option('display_post_meta_info');
	$aadya_display_featured_img = of_get_option('display_featured_img_on_page_post');
	$theme_style = of_get_option('theme_style');
?>
<?php if(!empty($aadya_feat_image) && $aadya_display_featured_img == true):?>
<div class="single-post-feat-image">	
	<img src="<?php echo $aadya_feat_image;?>" class="img-responsive"/>
</div>	
<?php endif;?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">
		<hgroup>
			<h1><?php the_title(); ?></h1>
			<?php if(!empty($aadya_display_post_meta_info)):?>	
			<div class="post-meta entry-meta">			
			<div class="row">
				<div class="col-md-6">
				
				<?php if($theme_style!="impact"):?>	
				<div class="post-author-avatar pull-left">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
				</div> <!-- .post-author-avatar -->
				<?php endif; ?>	
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<span class="sticky"><i class="fa fa-pushpin"></i> <span class="badge"><?php _e( 'Sticky', 'aadya' ); ?> </span></span>
				<?php endif; ?>				
				<div class="post-auth-wrapper">				
					<?php 
					
					if($theme_style!="impact") {
					
					printf( __( '<div class="post-meta-date"><span class="post-date"><i class="fa fa-calendar"></i> %1$s </span></div>', 'aadya' ),
								sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
								get_permalink(),
								esc_attr( get_the_time() ),
								get_the_date()
								));		

					printf( __( '<div class="post-meta-auth"><span class="post-author"><i class="fa fa-user"></i> %1$s </span></div>', 'aadya' ),
								sprintf( '<a class="url fn n" href="%1$s" title="%2$s">%3$s</a>',
								get_author_posts_url( get_the_author_meta( 'ID' ) ),
								sprintf( esc_attr__( 'View all posts by %s', 'aadya' ), get_the_author() ),
								get_the_author()
								));			
					} else {
						
							printf( __( '<span class="post-date text-muted no-margin"><i class="fa fa-calendar"></i> %1$s</span>
	<span class="post-author "><i class="fa fa-user text-muted"></i> %2$s</span>', 'aadya' ),
	sprintf( '<a href="%1$s" title="%2$s" rel="bookmark" class="text-muted">%3$s</a>',
	get_permalink(),
	esc_attr( get_the_time() ),
	get_the_date()
	),
	sprintf( '<a class="url fn n" href="%1$s" title="%2$s">%3$s</a>',
	get_author_posts_url( get_the_author_meta( 'ID' ) ),
	sprintf( esc_attr__( 'View all posts by %s', 'aadya' ), get_the_author() ),
	get_the_author()
	)
	);
					}
					
								

					?>				
				</div> <!-- .post-auth-wrapper -->
				</div> <!-- .col-md-6 -->	
				<div class="col-md-6">				
					<div class="hidden-xs pull-right postcomments">					
						<span class="post_comment"><i class="fa fa-comments"></i>
						<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments', 'aadya'),__('One comment','aadya'),__('% comments','aadya')); ?></a></span>
					</div>		

					<div class="visible-xs postcomments">					
						<span class="post_comment"><i class="fa fa-comments"></i>
						<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments', 'aadya'),__('One comment','aadya'),__('% comments','aadya')); ?></a></span>
					</div>						
				</div> <!-- .col-md-6 -->	
			</div> <!-- .row -->		
			</div> <!-- .post-meta .entry-header -->
			<?php endif;?>
		</hgroup>
	</header>	
	<hr class="custom-hr"/>
	<div class="entry-content">
	<?php the_content(); ?>
	</div><!-- .entry-content -->	
	<footer class="entry-meta">					
		<p><?php wp_link_pages(); ?></p>
		<hr/>
		<?php if(!empty($aadya_display_post_page_nav)):?>
		<div class="panel panel-default">
		  <div class="panel-heading">
		 
			<nav class="nav-single">
				<div class="row">	
					<div class="col-md-6">
						<span class="nav-previous pull-left"><?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> %title' ); ?></span>
					</div>	
					<div class="col-md-6">
						<span class="nav-next pull-right"><?php next_post_link( '%link', '%title <i class="fa fa-arrow-right"></i>' ); ?></span>
					</div>	
				</div>	
			</nav><!-- .nav-single -->	
		  
		  </div>
		  <?php if((has_category() || has_tag()) && !empty($aadya_display_post_meta_info)):?>
		  <div class="panel-body">
			<div class="cat-tag-info">				
				<?php if(has_category()):?>
				<div class="row">
				<div class="col-md-12 post_cats">
				<?php _e('<i class="fa fa-folder-open"></i> &nbsp;', 'aadya' );?>
				<?php the_category(', '); ?>
				</div>
				</div>
				<?php endif;?>
				<?php if(has_tag()):?>
				<div class="row">
				<div class="col-md-12 post_tags">
				<?php _e('<i class="fa fa-tags"></i> &nbsp;', 'aadya' );?>
				<?php the_tags('',', ',''); ?>
				</div>				
				</div>
				<?php endif;?>
			</div>				
		  </div>
		  <?php endif;?>
		</div>	
		<?php endif;?>
	</footer>
</article>

	
<?php get_template_part('author-box'); ?>		

<?php comments_template( '', true ); ?>
