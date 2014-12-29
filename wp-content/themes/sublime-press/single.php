<!--
Theme Name: Sublime
Author: amplifiii
Author URI: http://www.amplifiii.com
-->

<?php get_header(); ?>

<!-- Get Options Start -->
<?php
global $data; //fetch options stored in $data
?>
<!-- Get Options End -->

<!--?php //fetch options stored in $data
echo $data['heeader_tracking_code']; //get $data['id'] then echo the value
?-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="post clearfix">
<article class="home-entry">
<div class="home-entry-description">


<?php if( of_get_options('featured_image') ) : ?>
<div class="center-entry">
<?php
if ( has_post_thumbnail() ) {the_post_thumbnail();
//the_post_thumbnail();
} 
 ?>
</div>
<?php endif; ?>


	<header>

        <h1 class="single-title"><?php the_title(); ?></h1>
	<?php setPostViews(get_the_ID()); ?>
        
        <div class="post-meta">
            <span class="awesome-icon-calendar"></span><?php echo 'On' ?> <?php the_time('j'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?>
            <span class="awesome-icon-eye-open"></span><?php echo getPostViews(get_the_ID()); ?>
            <!-- span class="awesome-icon-user"></span--><?php //echo 'By' ?> <?php //the_author_posts_link(); ?>
            <!--span class="awesome-icon-comments"></span--><?php //echo 'With' ?>  <?php //comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
        </div>
        <!-- /loop-entry-meta -->
    </header>

    <div class="entry clearfix">
		<?php the_content(); ?>
        <div class="clear"></div>
        
        <?php wp_link_pages(' '); ?>
	
        <div class="post-bottom">
		<div class="post-tags">
        	<?php the_tags('<div style="float:left;width:70%"><span class="awesome-icon-tags"></span>',' , ','</div>'); ?>
        	<div style="float:right;width:30%;text-align:right"><span class="awesome-icon-book"></span><?php the_category('&gt;', 'multiple'); ?></div>
		</div>
        </div>
        <!-- /post-bottom -->

<div class="clear"></div>


<div class="navigation">
<div class="alignleft"> <?php previous_post_link(); ?></div>
<div class="alignright"> <?php next_post_link(); ?></div>
</div>
</div> 
</div>

</div>
        <!-- /entry -->
	
		<!--?php comments_template(); ?-->

</article>
<!-- /post -->

<?php endwhile; ?>
<?php endif; ?>
    
<?php //get_footer(); ?>
