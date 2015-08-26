<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="front-page">
    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
        <?php get_sidebar( 'top' ); ?>
        <?php get_sidebar( 'bottom' ); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>
    
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>