<?php get_header(); ?>


<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
            <?php while(have_posts() ) : the_post();?>
                <div class="category-post">
                    <div class="category-post-image">
                        <?php the_post_thumbnail();?>
                    </div>
                    <a href="<?php the_permalink();?>"><h3><?php the_title()?></h3></a>
                    <div class="category-post-meta">
                    <?php madeen_posted_on(); madeen_posted_by()?>
                    </div>
                    <div class="category-post-excerpt">
                        <?php the_excerpt();?>
                    </div>
                </div>
                <?php wp_reset_query(); ?>
                <?php endwhile;?>
               
            </div><!--category-posts-->

            <div class="category-slide-bar">

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>