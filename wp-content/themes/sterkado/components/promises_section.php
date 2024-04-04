<?php

$title = get_sub_field('title');

    ?>
    <div class="container">
        <?php if ($title) : ?> <h2 class="latest_news__title"><?php echo $title; ?></h2> <?php endif; ?> 
            <?php
              if( have_rows('promises') ): ?>
                    <div class="row promises-wrapper">
                        <?php
                           while( have_rows('promises') ) : the_row();

                        ?>
                            <div class="promises-item col-md-4" >
                                <div class="promises-img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="">
                                       
                                </div>
                                <h5 class="promises-heading">
                                    <?php the_sub_field('title'); ?>
                                </h5>
                            
                                <div class="promises-content">
                                    <?php the_sub_field('content'); ?>
                                </div> 
                        </div>
                        <?php
                        endwhile; ?>
                    </div> 
                    <?php
                    endif;
            ?>
    </div>
   


