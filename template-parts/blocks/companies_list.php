
<div class="container"> 
            <div class="company_list_inner">
                <div class="company_list_list">

<?php
/**
* Bootstrap ACF While Loop Modals
*/

// *Repeater
// modal_repeater
// *Sub-Fields
// modal_header
// modal_body
// modal_footer

// check if the repeater field has rows of data
if( have_rows('company_list') ):
	$i = 1; // Set the increment variable
 	// loop through the rows of data
    while ( have_rows('company_list') ) : the_row();
		

        $image = get_sub_field('image');
        $image_header = get_sub_field('image_header');
        $background_color = get_sub_field('background_color');
        $title_color = get_sub_field('title_color');
        
	?>
	
            
                            <div class="company_list" style="background-color:<?php echo $background_color ?>;">
                                <div class="">            
                                
                                        <div class="icon_img" style="background-image:url('<?php echo $image; ?>')">
                                            <img src="<?php echo get_template_directory_uri() ?>/dist/images/empty_260_260.png" alt="icon_img" />
                                        </div>
                                        <h4 class="company_list_header"  style="color:<?php echo $title_color ?> !important;"><?php echo $image_header;?></h4>

                                </div>

                            </div>

                


	<?php   $i++; // Increment the increment variable
	
	endwhile; //End the loop 

else :

    // no rows found

endif;

?>

</div>
</div>
</div>