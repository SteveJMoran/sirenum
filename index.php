<?php get_header(); ?>
	<div class="container-fluid">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					//
				} // end while
			} // end if
		?>
	</div>

<?php get_footer(); ?>