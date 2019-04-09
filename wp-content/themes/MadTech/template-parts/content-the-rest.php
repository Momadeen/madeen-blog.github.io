<section id="the-rest">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 ">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page'=> 5,
                        'offset' => 3,
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_format',
                                'operator'  => 'NOT IN',
                                'terms' => array('post_format-aside','post_format-chat','post_format-gallery','post_format-link','post_format-image','post_format-quote','post_format-status','post_format-video','post_format-audio')
                            )
                        )
                    );
                 $last_posts = new WP_Query($args);

                 while($last_posts->have_posts() ) : $last_posts->the_post();
                ?>
                <div class="clearfix"></div>
              <div class="last-6-posts">
                  <div class="last-6-box">
                  <div class="last-6-title">
                          <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
                      </div>
                      <div class="last-6-image">
                          <?php the_post_thumbnail();?>
                      </div>
                      <div class="last-6-meta">
                          <span><i class="fas fa-user-tie"></i> <?php the_author();?></span>
                          <span><i class="far fa-clock"></i> <?php echo get_the_date();?></span>
                      </div>
                      <div class="the-excerpt">
                          <span class="lead">
                          <?php the_excerpt()?>
                          </span>
                      </div>
                      
                      <div class="last-6-category">
                      <span><?php the_category();?></span>
                      </div>
                  </div><!--last post box-->
              </div><!--Last-6-posts-->
              <?php wp_reset_postdata(); endwhile;?> 
              <a href="#" id="loadmore">Show More</a>
                 
            </div><!--col-->

            <div class="col-md-12 col-lg-4 ">
                <div class="search-box">
                    <?php dynamic_sidebar('smartslider_area_1'); ?>
                </div>
                <div class="our-categories">
                <?php 
                $categories = get_categories();

                foreach($categories as $category) {
                    $tax_term_id = $category->term_taxonomy_id;
                    $images = get_option('taxonomy_image_plugin');
                    if (wp_get_attachment_image( $images[$tax_term_id])) {
                        echo '<div class="category-box">' . wp_get_attachment_image( $images[$tax_term_id], 'large') . '<div class="category-name"><a href="'.get_category_link($category->term_id).'"><h6>' . $category->name . '</h6></a></div><div class="overlay-category"></div></div>';
                    } else {
                        echo 'no';
                    }
                }
            ?>
                </div><!--our-categories-->

                <?php 
                $facebook = get_field('facebook', 100);
                $twitter = get_field('twitter');
                $google_plus = get_field('google_plus');
                $instagram = get_field('instagram');
                ?>
                <div class="our-media">
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $facebook;?>"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $twitter;?>"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $google_plus;?>"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $instagram;?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
            </div><!--col-->
        </div><!--row -->
    </div>

    <div class="background-video">
        <div class="container">
            <div class="video-posts">
                <h2>Subscribe in Our Channel</h2>
                <script src="https://apis.google.com/js/platform.js"></script>
                <div class="youtube-btn">
                    <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
                </div>
                
                <?php echo do_shortcode('[smartslider3 slider=4]');?>
                <div class="background-video">
                    
                </div>
            </div>
        </div>
    </div>
</section>