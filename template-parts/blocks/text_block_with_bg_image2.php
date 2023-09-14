<?php
$title = get_field('title');
$text = get_field('text');
$button = get_field('button_link');
$button_label = get_field('button_label');
?>

<div class="container meet_the_jugdes">
    <div>
        <h2 class="header"><?php echo $title; ?></h2>
        <p class="description"><?php echo $text; ?></p>



        <?php if( $button_label ): ?>
        <div class="wp-container-4 wp-block-buttons">
            <div class="wp-block-button"><a class="wp-block-button__link_blue has-bacground" href="<?php echo $button['url']; ?>" style="border-radius: 42px;width: 135%;"><?php echo $button_label; ?></a></div>
        </div>
        <?php endif; ?>
    </div>



    
</div>