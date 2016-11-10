<?php
 get_header();
?>


<section class="description">
<hr class="style-eight"></hr>
    <?php if( have_posts() ) {
			while( have_posts() ) {
				the_post(); ?>

	
				<div align="center"><h1><?php the_title(); ?></h1></div>
			

			
					<div class="img_responsive"><?php the_content(); ?></div>
			

			
			<div align="center"> <?php the_date(); ?></div>
		


		
		
		<?php }
		} ?>

    <?php
    get_footer();
    ?>
</section>



		



</section>



