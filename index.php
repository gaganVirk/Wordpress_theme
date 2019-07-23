<?php get_header(); ?>
<div class="container">
     <div class="main">
     	<?php if(have_posts()) : ?>
              <?php while(have_posts()): the_post(); ?>
                   <article class="post">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a>
                        </h3>
                            <div class="meta">
                            	Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
                            </div>
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                        <?php the_excerpt(); ?>
                        <br>
                         <a class="button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </article>
              <?php endwhile; ?>	
        <?php else : ?>
        	<?php echo wpautop('Sorry, No posts were found'); ?>
     	<?php endif; ?>	
     </div>

      <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
     </div>
     <div class="clr"></div>
</div>
<?php get_footer(); ?>
