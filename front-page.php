<?php 
/*
* Template Name: Front Page
*/
get_header(); ?>
<section id="home-section" class="hero">
    	<h1 class="vr text-center"><?php the_field('big_overlay_brand_text'); ?></h1>
		  <div class="js-fullheight home-wrap d-flex">
		  	<div class="half order-md-last"></div>
		  	<div class="half">
			  	<div class="home-slider owl-carousel">
			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(<?php the_field('slider_image_one'); ?>);">
			          	</div>
			        	</div>
			        </div>
			      </div>

			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(<?php the_field('slider_image_two'); ?>);">
			          		<div class="overlay"></div>
			          	</div>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
	    </div>
</section>


    <section class="ftco-section ftco-intro">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-8">
    				<h2><?php the_field('front_what_we_do_title'); ?></h2>
    				<p><?php the_field('front_what_we_do_text'); ?></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="services-section py-5 py-md-0">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-layers"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('front_role_1'); ?></h3>
                <p><?php the_field('front_role_1_text'); ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active d-block">
              <div class="icon"><span class="flaticon-web-programming"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('front_role_2'); ?></h3>
                <p><?php the_field('front_role_2_text'); ?></p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-idea"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('front_role_3'); ?></h3>
                <p><?php the_field('front_role_3_text'); ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active-2 d-block">
              <div class="icon"><span class="flaticon-contract"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('front_role_4'); ?></h3>
                <p><?php the_field('front_role_4_text'); ?></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-portfolio">
    	<div class="container-fluid">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-12 mb-5 heading-section text-center ftco-animate">
            <h2 class="mb-5">Latest &amp; <span>Greatest</span></h2>
          </div>
        </div>
    	</div>

		<div class="container">	
			<?php evans_works_list(); ?>
		</div>

    </section>
<?php get_footer(); ?>
