<section id="categories">
    <div class="categories container text-center">
    <h1>Our <i class="fas fa-fire"></i> Categories</h1>
        <div class="row">
        
            <?php 
                $categories = get_categories();

                foreach($categories as $category) {
                    $tax_term_id = $category->term_taxonomy_id;
                    $images = get_option('taxonomy_image_plugin');
                    if (wp_get_attachment_image( $images[$tax_term_id])) {
                        echo '<div class="col-md-3 col-6"><div class="category-box">' . wp_get_attachment_image( $images[$tax_term_id], 'large') . '<div class="category-name"><h3>' . $category->name . '</h3></div><div class="overlay-category"></div></div></div>';
                    } else {
                        echo 'no';
                    }
                }
            ?>
        </div>
    </div><!--container-->
</section>