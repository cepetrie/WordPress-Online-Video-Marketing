<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="search">

	<?php if (have_posts()) : ?>

		<h1>
		<?php 
        _e('Search Results for: ', 'generaltheme');
        echo get_search_query();
        ?>
		</h1>
    
	<?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
		<span class="author">by <?php the_author_posts_link(); ?></span>
        </p>
		<?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>
        </div><!-- /.post-box -->
    <?php endwhile; ?>
    
    	<div class="alignleft"><?php previous_posts_link() ?></div>
		<div class="alignright"><?php next_posts_link(); ?></div> 

	<?php else : ?>
		<h2>Sorry, but we couldn't find what you were looking for.</h2>
        <p>Would you like to try a different search?</p>
    	<?php get_search_form(); ?>

	<?php endif; ?>
		
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>