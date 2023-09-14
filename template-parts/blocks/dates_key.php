<div class="date_container">

                <section id="date_key" class="w-100">
                        <!-- content 1 -->
                        <div class="container content-center mt-4 mb-4 mobile-card-h">
                            <?php 

                            $title = get_field('title'); 
                            $text = get_field('text');

                            

                            ?>


                                <div class="date_outer_top">
                                    <h2><?php echo $title?></h2>
                                    <p><?php echo $text ?></p>
                                </div>



                                <div class="card-center">

                                <?php if( get_field('date_block') ): ?>
                                    <?php while( the_repeater_field('date_block') ): ?>

                                        <div class="mb2 date_outer"> 
                                            <div class="date_box_left">

                                            <?php
                                            $date_block = get_field('date_block'); 
                                            $month = get_sub_field('month');
                                            $day = get_sub_field('day');
                                            $date_title = get_sub_field('date_title');
                                            $date_text = get_sub_field('date_text');
                                            $text_date = get_sub_field('text_date');
                                            ?>
                                            <?php if($day): ?>
                                            <p><?php echo $day ?></p><br /> 
                                            <?php endif; ?>   

                                            <?php if($text_date): ?>
                                            <p><?php echo $text_date ?></p><br /> 
                                            <?php endif; ?>  

                                            <h2><?php echo $month ?></h2>    
                                            </div>
                                                <div class="date_box_right">
                                                    <h3><?php echo $date_title ?></h3>
                                                    <p><?php echo $date_text ?></p>
                                                </div>
                                                 
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                                    


                        </div>
                        <!-- content end -->
            </section>
  


</div>
