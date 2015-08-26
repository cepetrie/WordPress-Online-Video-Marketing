<aside id="primary"><!--START SIDEBAR PRIMARY-->

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>
	<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>
    
     <div class="widget">
		<h3>Search</h3>
		<?php get_search_form(); ?>
	 </div>
        
        
     <div class="widget">	
		<h3>Categories</h3>
   		<ul>
      	<?php wp_list_categories('title_li='); ?>
   		</ul>
     </div>

	<?php endif; ?>

</aside><!--END SIDEBAR PRIMARY-->


