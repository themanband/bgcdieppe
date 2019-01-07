<?php get_header()?>
<div>
    <?php while(have_posts()): the_post()?>
        <?php the_content(__('Continue Reading'));?>
    <?php endwhile; ?>
</div>
<?php get_sidebar(); get_footer()?>