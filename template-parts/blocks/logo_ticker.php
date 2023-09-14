

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 logo_tick_style">

		<?php 

		$title = get_field('title');	
		
		if ($title) : ?><h4 style="color:<?php the_field('color'); ?>"><?php echo $title; ?></h4><?php endif; 
		
		?>
            <?php
			


if ( get_field('shortcode') ) {
	echo do_shortcode( get_field('shortcode') );
}

	?>

		</div>
	</div>
</div>


