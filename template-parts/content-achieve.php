<div class="post-content">
    <?php if (has_post_thumbnail()) {?>
    <img src="<?php the_post_thumbnail('thumbnail');?>" alt="thumbnail">
    <?php } ?>
    <h2><?php the_title(); ?></h2>
    <div class="tags">
        <span><?php the_date() ?></span>
    </div>
    <p><?php the_excerpt(); ?></p>
    <div><p><a class="post-readmore" href="<?php the_permalink() ?>">Read more</a></p></div>
</div>