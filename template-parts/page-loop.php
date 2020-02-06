<?php while(have_posts() ) : the_post();  ?>
<h1 class="text-center text-primary"><?php the_title(); ?></h1>
<div class="blog-img text-center">
    <?php 
        // check if image exists
        if( has_post_thumbnail() ) :
            the_post_thumbnail('box', array('class' => 'featured-image')); 
        endif;   
    ?> 
</div>
    <div class="mt-5">      
        <?php the_content(); ?>
        <p>Category: <?php the_category( ', ' ); ?></p>
        <p>Posted on: <?php the_time('F jS, Y'); ?></p>
        <p>By: <?php the_author( ', ' ); ?></p></p>
    </div>
<?php endwhile; ?>