<?php   
 
function evans_works_list() {
?>
<?php
    
        $args = array(
            'post_type' => 'evans_works',
            'posts_per_page' => 6
        );

        //Set up a counter
        $counter = 0;

        // Use WP_Query and append the results into $works
        $works = new WP_Query($args);

        while($works->have_posts()) : $works->the_post(); $counter++;

    ?>
        <?php if ($counter % 2 == 0): ?> 
        <div class="row no-gutters">
	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
						  
							<div class="col-md-5 img js-fullheight image-parent" style="background-image: url('<?php the_field('post_image'); ?>');" ></div>
						 
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading"><?php the_field('subheading'); ?> {<?php  the_field('subheading_date');?>}</span>
				  							<h2 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p><?php the_excerpt(__('more...')); ?></p>
				  							<p><a href="<?php the_field('button_link_works'); ?>" class="custom-btn"><?php the_field('button_text'); ?></a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
    	</div>
            <br />

        <?php else : ?>

        <div class="container-fluid px-0 portfolio-entry">
    		<div class="row no-gutters d-xl-flex justify-content-end text-wrapper">
					<div class="one-half img js-fullheight" style="background-image: url('<?php the_field('post_image'); ?>');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						<div class="text align-items-center d-flex">
                            <div class="desc pt-5 pl-4 pr-4 pt-lg-0 pl-lg-5 pl-xl-0 pr-xl-0">
								<div class="top">
                                    <span class="subheading"><?php the_field('subheading'); ?> {<?php  the_field('subheading_date');?>}</span>
                                    <h2 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  							    </div>
                                <div class="absolute">
                                    <p><?php the_excerpt(__('more...')); ?></p>
                                    <p><a href="<?php the_field('button_link_works'); ?>" class="custom-btn"><?php the_field('button_text'); ?></a></p>
                                </div>
							</div>
                        </div>
					</div>
    		</div>
    	</div>
        <br />
        <?php endif; ?>
            
    <?php endwhile; wp_reset_postdata(); ?>

<?php }

