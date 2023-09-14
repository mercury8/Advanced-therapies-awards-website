<?php if ( have_rows('faq') ) : ?>
<div class="container mt-4" id="accordion">
    <!-- faq single block start  -->
    <?php $item=1;?>
    <?php while( have_rows('faq') ) : the_row(); ?>

    <?php if($item == 0){
        
        $aria = 'aria-expanded="true"';

        $collapseClass = ' show';
        }else{
            $aria = 'aria-expanded="false"';

            $collapseClass = '';
        } 
        ?>
        <div class="faq_items text-center text-md-left">
        <div class="faq_heading" id="heading<?php echo $item;?>">
            <h4 class="faq_title bg-gold p-1 mb-3">
                <a class="text-light collapsed" data-toggle="collapse" data-target="#collapse<?php echo $item;?>"
                    aria-controls="collapse<?php echo $item;?>" data-parent="#accordion" <?php echo $aria;?>
                    href="#collapse<?php echo $item;?>"><?php echo get_sub_field('title'); ?></a>
            </h4>
        </div>
        <div id="collapse<?php echo $item;?>" class="collapse<?php echo $collapseClass;?>"
            aria-labelledby="heading<?php echo $item;?>" data-parent="#accordion">
            <div class="faq_body mb-5 text-center text-sm-center text-md-left">

                    <?php
                    
                    $image = get_sub_field('sponsored_by_image');

                    if( get_sub_field('sponsored_by_image') ): ?>
                        <div class="faq_image w-25 mb-5 mx-auto mx-md-0"><p>SPONSORED BY</p>
                            <img src="<?php echo $image['url']; ?>" alt="" /></div>
                    <?php endif; ?>


                <?php echo get_sub_field('description'); ?>

            </div>
            <?php if( get_sub_field('btn_url') ): ?>
                    <a href="<?php echo get_sub_field('btn_url'); ?>" class="btn btn-danger mb-5" role="button"><?php echo get_sub_field('btn_title'); ?></a>
            <?php endif; ?> 
        </div>
    </div>
    <?php $item++;?>
    <?php endwhile; ?>
    <!-- faq sigle block end  -->
</div>
<?php endif; ?>