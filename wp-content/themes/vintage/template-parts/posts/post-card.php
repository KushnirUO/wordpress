<?php
$tags = get_the_tags();
$first_name = get_the_author_meta('first_name');
$second_name = get_the_author_meta('last_name');
if($first_name or $second_name) :
$full_name = $first_name . ' ' .  $second_name;
else :
$full_name = get_the_author();
endif;
?>

    <article>
            <div class="feature-image">
            <a href="<?php the_permalink(); ?>" >
            <img src="<?php the_post_thumbnail_url(); ?>" alt=""/>
            </a>
              <div class="entry-date">
               <div class="month"><?php the_time('m'); ?></div>
                <div class="number"><?php the_time('d'); ?></div>
              </div>
            </div>
            <div class="excerpt">
            <a href="<?php the_permalink(); ?>" class="post-heading" ><?php the_title()?></a>
            <p><?php the_excerpt(); ?></p>
            </div>
            <div class="meta">
            <span class="user">
            <a href="#"><?php echo $full_name;?></a>
            </span>

             <span class="comments"><?php echo get_comments_number(); ?></span>
            <?php
            if($tags) : ?>
             <span class="tags">
                 <?php foreach($tags as $tag) :?>
                    <a href="<?php echo get_tag_link($tag); ?>"> <?php echo $tag->name; ?></a>
                    <?php endforeach; ?>
              </span>
              <?php endif; ?>
              </div>
            <i class="tape"></i>
    </article>