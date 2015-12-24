<?php 
/* if ( !is_user_logged_in() ) {
	 get_template_part('maintenance/splashpage');
 } else {*/

get_header(); ?>

<!-- Used to only show popout newsletter on homepage -->
<span id="homepage-flag" style="display: none" ></span>

	<div id="primary-home" class="full-content">
		
        
        <?php get_template_part( 'inc/slider' ); ?>
        
        <div id="content"  class="">
        
   
			
		

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); 

 //} // end if logged in ?>