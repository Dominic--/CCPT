<?php get_header(); ?>

<!-- Get Options Start -->
<?php
global $data;
?>

<!--
<?php
if (empty($data['featured_image_blog'])) {
    echo '$var is either 0, empty, or not set at all';
}
?>

<?php
if (isset($data['featured_image_blog'])) {
    echo '$var is set even though it is empty';
}
?>

<!-- Get Options Start -->


<!-- Start Home-Wrap -->
<div class="home-wrap clearfix">

<!-- Start The Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( of_get_options('featured_image_blog') ) : ?>
<div class="center-entry">
<?php
if ( has_post_thumbnail() ) {the_post_thumbnail();
} 
 ?>
</div>
<?php endif; ?>

<!-- Post Header Starts -->
        <header>

<!-- Title Starts -->
        <h1 class="single-title-home"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a></h1>
<!-- Title Ends -->

<!-- Meta Starts -->
        <div class="post-meta" >
            <span class="awesome-icon-calendar"></span><?php echo 'On' ?> <?php the_time('j'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?>
		<span class="awesome-icon-eye-open"></span><?php echo getPostViews(get_the_ID()); ?>
            <!--span class="awesome-icon-user"></span--><?php //echo 'By' ?> <?php //the_author_posts_link(); ?>
        </div>
<!-- Meta Ends -->

        </header>
<!-- Post Header Ends -->

<!-- Excerpt Starts -->
        <div style="text-align:left" class="entry textcenter clearfix" <?php post_class(); ?>>
        <?php  the_content(__("")); ?>
        <div class="clear"></div>
        <h4 class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">[Read More]</a></h4>
        </div>
<!-- Excerpt Ends -->

<!-- End Loop -->
<?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
<div id="four-0-four-page">
        <h1>404 error!!!</h1>
        <p>
        <?php echo 'Sorry, the page you were looking for could not be found. <br> <br> Try either checking the URL for errors or visiting the' ?> <a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php echo 'homepage' ?></a>.
    </p>
    <br>
</div>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>


<!-- Start Page Functionality -->
<div class="home-post-nav">
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>
</div>
<!-- End Page Functionality -->


</div>
<!-- End Home-Wrap -->

<?php //get_footer(); ?>
