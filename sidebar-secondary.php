<!--START SIDEBAR SECONDARY-->
<aside id="secondary">

	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
    
        <div class="widget">
            <h3>CONTACT US</h3>
            <p class="aligncenter">Video is the fastest growing marketing medium in history<a href="contact"><strong> Don’t get left behind! </strong>		
            </a>Contact us for a FREE 30 minute consultation.</p>
            <form>
                       <input type="text" placeholder="Name" required>
                       <input type="email" placeholder="Email" required>
                                        
            </form>		     
        </div>
        
        <div class="widget">
            <h3>FEATURED VIDEO</h3>
            <iframe width="250" height="141" src="https://www.youtube.com/embed/DzybgophSNg?rel=0" ></iframe>
		</div>

	<?php endif; ?>
    
</aside><!--END SIDEBAR SECONDARY-->


