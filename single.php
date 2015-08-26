<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="single">

<!--the loop goes here-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
       <h2><?php the_title(); ?></h2>  
    	
        <article class="post">    	
            <p class="postmetadata">
            <span>Posted on <?php the_time('F jS, Y') ?></span> in 
            <span><?php the_category(', ') ?></span> by
            <span><?php the_author_posts_link() ?> </span>
        	</p>                      
			<?php the_content('More &raquo;'); ?>
    		<?php wp_link_pages(); ?>          
        </article>
		
   <?php endwhile; ?>
	
        <div class="alignleft"><?php previous_post_link('&laquo; %link', 'Previous Post') ?></div>
		<div class="alignright"><?php next_post_link('%link &raquo;', 'Next Post'); ?></div>      
	
   <?php comments_template(); ?>       
  
   <?php else : ?>
	<?php get_template_part('post', 'not-found'); ?>
	<?php endif; ?>
<!--end loop-->

</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>
