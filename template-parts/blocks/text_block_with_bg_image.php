<?php
$title = get_field('title');
$button = get_field('button');
$button_label = get_field('button_label');
?>

<div class="wp-container-7 wp-block-columns bg-pattern-003 text-block-with-bg mb-3">
    <div class="wp-container-5 wp-block-column text-box-left-padding" style="flex-basis:70%">
        <h2 class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:500;color:white;"><?php echo $title; ?></h2>



        <?php if( $button_label ): ?>
        <div class="wp-container-4 wp-block-buttons">
            <div class="wp-block-button"><a class="wp-block-button__link has-bacground" href="<?php echo $button['url']; ?>" style="border-radius:7px;background-color:#b88f63"><?php echo $button_label; ?></a></div>
        </div>
        <?php endif; ?>
    </div>



    <div class="wp-container-6 wp-block-column text-box-left-block" style="flex-basis:30%">
</div>
</div>