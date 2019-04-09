<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme5 */

get_header(); ?>

<?php get_template_part('template-parts/content', 'recent-posts')?>

<section id="subscribe">
    <div class="sub-background text-center">
        <div class="overlay-sub"></div>
        <img src="<?php echo get_template_directory_uri()?> /assets/img/sub-image.jpeg" alt="sub">
    </div>
    <h4>Subscribe in our newsletter!</h4>
    <div class="subscribe-form">
        <form action="#">
            <input type="email" name="email" placeholder="Subscribe in our newsletter Now!!">
            <input type="submit" value="Subscribe Now!!!">
        </form>
    </div><!--subscribe-form-->
</section>

<?php get_template_part('template-parts/content', 'top-posts');?>
<?php get_template_part('template-parts/content', 'the-rest');?>

<?php get_footer(); ?>