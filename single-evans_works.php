<?php 
/*
   Template Name: Work Single Page
   Template Post Type: post, page, works
*/
get_header(); ?>
<section class="hero-wrap hero-wrap-2 js-fullheight hero-img" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">Work Single</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Work Details <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">
		        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <h2 class="mb-3 h1"><?php the_title(); ?></h2>
            <img src="<?php the_field('post_image'); ?>" alt="" class="img-fluid" />
				  <div class="mt-3">
            <?php the_content(); ?>
          </div>
            <p><a href="<?php the_field('button_link_works'); ?>" class="btn btn-primary py-3 px-4"><?php the_field('button_text'); ?></a></p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <?php
                    $posttags = get_the_tags();
                    $count=0; $sep='';
                    if ($posttags) {
                        echo ' ';
                        foreach($posttags as $tag) {
                            $count++;
                            echo $sep . '<a href="'.get_tag_link($tag->term_id).'"class="tag-cloud-link" >'.$tag->name.'</a>';
                    $sep = ' ';
                            if( $count > 5 ) break; //change the number to adjust the count
                        }
                    }
                  ?>
                </div>
			        </div>
			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span><br />
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
     
			<!-- /post details -->

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bio-image-widget') ) : ?>
                <?php endif; ?>
              </div>
              <div class="desc">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bio-text-widget') ) : ?>
                <?php endif; ?>
              </div>
            </div>

 
            <div class="pt-5 mt-5">
              <div class="comment-form-wrap pt-5">
                <?php comments_template(); ?>
              </div>
            </div><!--pt-mt5-->

          </div> <!-- .col-md-8 -->

        </div>
      </div>
    </section> <!-- .section -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
