
<div class="container"> 
            <div class="image_list_inner">
                <div class="image_inner_list">

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
if( have_rows('image_list') ):
	$i = 1; // Set the increment variable
 	// loop through the rows of data
    while ( have_rows('image_list') ) : the_row();
		
		$modal_header = get_sub_field('modal_header');
		$modal_body = get_sub_field('modal_body');
		$modal_footer = get_sub_field('modal_footer');
        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $sub_title = get_sub_field('sub_title');
        
	?>
	
           
                            <div class="item_image_list">
                                <div class="image_inner">            
                                   <div class="hover_div">
                                    <h2><?php echo $name; ?></h2>
                                    <br/>
                                    <p><?php echo $sub_title; ?></p>
                                </div>
                                        <div class="image_img" style="background-image:url('<?php echo $image; ?>')">
                                            <img src="<?php echo get_template_directory_uri() ?>/dist/images/empty_260_260.png" alt="icon_img" />
                                        </div>
                                   
                                </div>
                            </div>
                       

                                


                                </div>
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