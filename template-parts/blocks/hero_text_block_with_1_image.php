<?php
$text = get_field('text');
$image_1 = get_field('image_1');
?>

<div class="wp-container-2 wp-block-columns container-fluid bg-gold py-5">
    <div class="wp-container-1 wp-block-column" style="flex-basis:80%">
        <h2 class="has-text-align-center has-white-color has-text-color has-background has-large-font-size" ><?php echo $text; ?></h2>
    </div>
    <div class="p-2 mx-auto d-block">                    
                    <?php if( $image_1 ): ?><div class="image_1 image_common"><img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" /></div><?php endif; ?>
    </div>
</div>