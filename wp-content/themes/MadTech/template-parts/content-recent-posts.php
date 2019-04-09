
<section id="recent-posts" class="clearfix">

<div class="post-slider container">
    <div class="row">
        <div class="swiper-container col-md-12"">
            <div class="swiper-wrapper">
                <?php 
                    $args = array(
                        'posts_per_page' => '4',
                        'orderby'        => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_format',
                                'operator'  => 'NOT IN',
                                'terms' => array('post_format-aside','post_format-chat','post_format-gallery','post_format-link','post_format-image','post_format-quote','post_format-status','post_format-video','post_format-audio')
                            )
                        )
                    );
                    $sticky_post = new WP_Query($args);
                    while($sticky_post->have_posts() ) : $sticky_post->the_post(); ?>
                <div class="swiper-slide sticky-box">
                    <a href="<?php the_permalink()?>">
                    <h2><?php the_title();?></h2></a>
                    <div class="sticky-image">
                        <a href="<?php the_permalink()?>">
                        <div class="overlay-image"></div>
                        <?php the_post_thumbnail()?>
                        </a>
                    </div><!--sticky image-->
                    <div class="sticky-meta">
                        <span><?php the_category();?></span>
                        <span><i class="far fa-clock"></i> <?php echo get_the_date();?></span>
                    </div><!--Sticky meta-->
                    <span class="the-author"><?php the_author()?></span>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div><!--Row-->
</div><!--Post Slider-->

    <div class="quote-of-day">
        <div class="container">
        <h2>Quote Of The Day</h2>
            <?php $quote = get_field('quote', 100);
                    $by = get_field('write_by', 100); ?>
            <p class="the-quote">“ <?php echo $quote; ?></p>
            <span class="write-by"><?php echo $by; ?></span>
        </div>
    </div>



<div class="recent-3-posts">
    <div class="container">
                    <h2>Last Posts</h2>
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'operator'  => 'NOT IN',
                            'terms' => array('post_format-aside','post_format-chat','post_format-gallery','post_format-link','post_format-image','post_format-quote','post_format-status','post_format-video','post_format-audio')
                        )
                    )
                );
                $recent_posts = new WP_Query($args);
            ?>
            <?php while($recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                <div class="recent-box col-md-12 col-lg-4">
                    <a href="<?php the_permalink()?>">
                    <div class="recent-image">
                        <?php the_post_thumbnail();?>
                    </div>
                    </a>
                    <div class="post-category">
                        <span><?php the_category();?></span>
                    </div>
                    <a href="<?php the_permalink()?>"><h5 class="post-title"><?php the_title(); ?></h5></a>
                    <div class="post-meta">
                    <i class="far fa-clock"></i> <span class="post-date"><?php echo get_the_date();?></span>
                    <i class="fas fa-user-tie"></i> <span class="post-author"><?php the_author()?></span>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt();?>
                    </div>
                    
                </div>
                <?php endwhile;?>
        </div>
    </div>
</div>

</section> <!---recent-posts-->