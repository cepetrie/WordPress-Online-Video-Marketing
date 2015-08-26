<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="index">

<!--the loop goes here-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    	
        <article class="post"> 
        	
            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="postmetadata">
            <span>Posted on <?php the_time('F jS, Y') ?></span> in 
            <span><?php the_category(', ') ?></span> by
            <span><?php the_author_posts_link() ?> </span>
        	</p>              
			
            <?php the_excerpt(); ?>
        	<p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>         
        
        </article>
		
   <?php endwhile; ?>
           
           <div class="alignleft"><?php previous_posts_link() ?></div>
		   <div class="alignright"><?php next_posts_link(); ?></div>           
      
  <?php endif; ?>
  <!--end loop-->

</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>

 