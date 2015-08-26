<?php get_header(); ?>

<div id="main">                
<!-- START CONTENT -->
<div id="content" class="404">

	<h2>404 - Not Found</h2>
	<p>Sorry, but we couldn't find what you were looking for.<br />
	Please try again or maybe visit our 
    <a href="http://www.christinapetrie.com/onlinevideo/">Home Page</a> to start fresh..</p>

<?php get_search_form(); ?>
   
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>