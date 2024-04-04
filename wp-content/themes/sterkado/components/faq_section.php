<?php
$title              = get_sub_field('title');
$slides            = get_sub_field('slides');
?> 
<div class="section-space">
	<div class="container faq_wrapper">
		<?php if(!empty($title)): ?>
		<div class="slide-title">
			<h2><?=$title;?></h2>
		</div>
		<?php endif; ?>
        <?php if( have_rows('faqs') ): $c=1;?>
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion">
                        <?php while( have_rows('faqs') ): the_row(); 
                            ?>
                             <div class="card">
                                <div class="card-header" id="heading_<?= $c; ?>">
                                    <h5 class="faq-title">
                                        <a class="faq_question <?php if($c!='1'){ echo "collapsed";} ?>" data-toggle="collapse"  data-target="#collapse_<?= $c; ?>" aria-expanded="true" aria-controls="collapse_<?= $c; ?>">
                                            <?php the_sub_field('question'); ?>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse_<?= $c; ?>" class="collapse <?php if($c=='1'){ echo "show";} ?>" aria-labelledby="heading_<?= $c; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php the_sub_field('answer'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php $c++; endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
	</div>
</div>
