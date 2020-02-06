<?php 
/*
* Template Name: Beautiful Work Page
*/
get_header(); ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php the_field('hero_image'); ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">Beautiful Work</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-portfolio">
    	<div class="container">
    		<div class="row">
				<?php
					
					$args = array(
						'post_type' => 'evans_works'
						);

						//Set up a counter
						$counter = 0;

						// Use WP_Query and append the results into $works
						$works = new WP_Query($args);

						while($works->have_posts()) : $works->the_post(); $counter++;

				?>
				<?php if ($counter % 2 == 0): ?> 
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(<?php the_field('post_image'); ?>);"></div>     
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading"><?php the_field('subheading'); ?> {<?php  the_field('subheading_date');?>}</span>
				  							<h2 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p><?php the_excerpt(__('more...')); ?></p>
				  							<p><a href="<?php the_field('button_link_works'); ?>" class="custom-btn"><?php the_field('button_text'); ?></a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>

				<?php else : ?>

	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(<?php the_field('post_image'); ?>);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading"><?php the_field('subheading'); ?> {<?php  the_field('subheading_date');?>}</span>
				  							<h2 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p><?php the_excerpt(__('more...')); ?></p>
				  							<p><a href="<?php the_field('button_link_works'); ?>" class="custom-btn"><?php the_field('button_text'); ?></a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>

				<?php endif; ?>
            
    			<?php endwhile; wp_reset_postdata(); ?>

	  		</div>
    	</div>

    </section>

    <?php get_footer(); ?>