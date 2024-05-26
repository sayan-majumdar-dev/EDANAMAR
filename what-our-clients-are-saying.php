<?php
/* Template Name: what-our-clients-are-saying Page */

get_header();
?>
           <?php
              $testimonial_heading = get_field('testimonial_heading');
              $testimonial_banner_img = get_field('testimonial_banner_img');
              $testimonial_container_heading = get_field('testimonial_container_heading');   
            ?>

<div class="innerPage testMinoilass">
	<img src="<?php echo get_field('testimonial_banner_img'); ?>" alt="">
		<div class="innerBannerText">
			<h3><?php echo $testimonial_heading ; ?></h3>
		</div>
		<div class="ban-client-img">
		<img src="http://159.89.165.13/edanamar/wp-content/themes/edanamar/assets/img/c-1.png" alt="">
		</div>
	</div>

<div class="testimonialsInerMainPage text-center">
  <div class="container">
    <h4><?php echo $testimonial_container_heading ; ?></h4>
    <div class="swiper mySwiper testi">
      <div class="swiper-wrapper">
           <?php 
              if(have_rows('testimonial_item')):
              while(have_rows('testimonial_item')): the_row(); 
              $testimonial_slider_paragraph = get_sub_field('testimonial_slider_paragraph');
              $testimonial_slider_heading = get_sub_field('testimonial_slider_heading'); 
            ?>
        <div class="swiper-slide">
          <div class="sliderText">
        <p><?php echo $testimonial_slider_paragraph ; ?></p> 
           <h5><?php echo $testimonial_slider_heading ; ?></h5> 
          </div>
        </div>
       <?php endwhile; endif; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </div>

</div>



<?php get_footer();?>