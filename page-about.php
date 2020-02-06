<?php 
/*
* Template Name: About Page
*/
get_header(); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?php the_field('about_hero'); ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">About Us</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-intro">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-4 d-flex">
    				<div class="img" style="background-image: url('<?php the_field('about_image'); ?>')"></div>
    			</div>
    			<div class="col-md-8 py-md-5 pt-4 p-md-5">
    				<h2><?php the_field('what_we_do_title'); ?></h2>
    				<p><?php the_field('what_we_do_text') ?></p>
    				<p><a href="<?php the_field('about_button_link') ?>" class="btn btn-primary"><?php the_field('about_button_text') ?></a></p>
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
                <h3 class="heading mb-3"><?php the_field('about_role_1') ?></h3>
                <p><?php the_field('about_role_1_text') ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active d-block">
              <div class="icon"><span class="flaticon-web-programming"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('about_role_2') ?></h3>
                <p><?php the_field('about_role_2_text') ?></p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-idea"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('about_role_3') ?></h3>
                <p><?php the_field('about_role_3_text') ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active-2 d-block">
              <div class="icon"><span class="flaticon-contract"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php the_field('about_role_4') ?></h3>
                <p><?php the_field('about_role_4_text') ?></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="testimony-section">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img" style="background-image: url(<?php the_field('about_image'); ?>);"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          	<div class="heading-section heading-section-white pt-4 ftco-animate">
		          <h2 class="mb-0">Customer Says</h2>
		        </div>
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php the_field('testimonial_text_one'); ?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php the_field('testimonial_image_one'); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php the_field('name_of_person_testimonial_one'); ?></p>
	                    <span class="position"><?php the_field('testimonial_job_title'); ?></span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php the_field('testimonial_text_two'); ?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php the_field('testimonial_image_two'); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php the_field('name_of_person_testimonial_two'); ?></p>
	                    <span class="position"><?php the_field('testimonial_job_title_two'); ?></span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php the_field('testimonial_text_six'); ?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php the_field('testimonial_image_six'); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php the_field('name_of_person_testimonial_six'); ?></p>
	                    <span class="position"><?php the_field('testimonial_job_title_six'); ?></span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php the_field('testimonial_text_four'); ?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php the_field('testimonial_image_four'); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php the_field('name_of_person_testimonial_four'); ?></p>
	                    <span class="position"><?php the_field('testimonial_job_title_four'); ?></span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php the_field('testimonial_text_five'); ?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(<?php the_field('testimonial_image_five'); ?>)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php the_field('name_of_person_testimonial_five'); ?></p>
	                    <span class="position"><?php the_field('testimonial_job_title_five'); ?></span>
	                  </div>
	                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-intro bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 text-center">
    				<h2 class="mb-0 font-primary">We've done work of <span class="number" data-number="300">0</span> Portfolio</h2>
    			</div>
    		</div>
    	</div>
    </section>

<?php get_footer(); ?>