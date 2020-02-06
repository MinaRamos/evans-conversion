<?php 
/*
* Template Name: Gallery Page
*/
get_header(); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php the_field('gallery_hero_image'); ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">Gallery</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-section bg-primary">
      <div class="container pt-5 pb-5">
          <?php the_content(); ?>
      </div>
    </section>

<?php get_footer(); ?>