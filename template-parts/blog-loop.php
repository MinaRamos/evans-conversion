<div class="article animate-box">
    <a href="<?php the_permalink(); ?>" class="blog-img">
        <img class="img-responsive" src="<?php echo the_field('custom_blog_image'); ?>">
        <div class="overlay"></div>
        <div class="link">
            <span class="read">Read more</h2>
        </div>
    </a>
    <div class="desc">
        <span class="meta"><?php the_time('F jS, Y'); ?></span>
        <h2><a href="blog.html"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        Category: <?php the_category( ', ' ); ?><br />
        Posted on: <?php the_time('F jS, Y'); ?><br />
        By: <?php the_author( ', ' ); ?>
    </div><!--end desc-->
</div><!--end animate-box - article--> 