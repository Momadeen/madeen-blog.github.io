<section id="top-posts">
            <h1 class="text-center">Top Of The Week</h1>
    <div class="popular-posts">

            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'meta_key'  => 'wpb_post_views_count',
                    'orderby'  => 'meta_value_num'
                );
                $popularpost = new WP_Query($args);
                while($popularpost->have_posts() ) : $popularpost->the_post();
            ?>
            <div class="popular-post">
                <a href="<?php the_permalink() ?>">
                <div class="pop-image">
                    <?php the_post_thumbnail();?>
                    <div class="image-overlay"></div>
                </div>
                </a>
                <div class="pop-title">
                    <a href="<?php the_permalink()?>"><h6><?php the_title();?></h6></a>
                </div>
                <div class="pop-meta">
                <i class="far fa-clock"></i>  <?php echo get_the_date();?>
                </div>
                <div class="pop-category">
                <span><?php the_category();?></span>
                </div>
            </div>
            <?php endwhile;?>
        </div>
</section>