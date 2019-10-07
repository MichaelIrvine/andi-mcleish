<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Andi_McLeish
 */

get_header();
?>
<button class="back-button" onclick="history.go(-1);">Back</button>
<div class="content-area_projects">
    <?php if( have_rows('project_item') ): ?>
    
    <div class="swiper-container_single-project">
    <ul class="swiper-wrapper">
        <li class="swiper-slide swiper-spacer">
        <div class="project-heading">
            <div class="project-title-wrapper">
                <h1 data-swiper-parallax="-35%" class="project-title">
                    <span><?php echo the_title(); ?></span>
                </h1>
            </div>
        </div>

        </li>
    <?php while( have_rows('project_item') ): the_row(); 
	// vars
	$portfolioImage = get_sub_field('project_image');
	$portfolioVideo = get_sub_field('project_video');
	?>

    <?php 
	if($portfolioImage): ?>
        <li class="swiper-slide swiper-slide_single-project">
            <img src="<?php echo $portfolioImage['url']; ?>" alt="<?php echo $portfolioImage['alt'] ?>" />
        </li>
    <?php endif; ?>
    <?php 
	if($portfolioVideo): ?>
        <li class="swiper-slide swiper-slide_single-project">
            <video muted loop autoPlay='true' width="670" height="450" class="single-project-video">
                <source src="<?php echo $portfolioVideo['url']; ?>" type="video/mp4">
            </video>
        </li>
        <?php endif; ?>
        <?php endwhile; ?>
    </ul>
    </div>
    <?php endif; ?>
</div><!-- #primary -->

<?php

get_footer();