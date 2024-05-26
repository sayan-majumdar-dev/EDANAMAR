<?php
/* Template Name: recent sale Page */

get_header();
?>

         <?php
              $recentdetail_banner_image = get_field('property_banner',get_the_id());
              $recentdetail_banner_heading1 = get_field('description');
             
           ?>
<div class="innerPage laNeigh propertyVideosPage">
	<?php if(get_field('property_banner')){ ?>
		<img src="<?php echo $recentdetail_banner_image['url'];?>" alt="<?php echo $recentdetail_banner_image['alt']; ?>">
	<?php }else{ ?>
				<img src="<?php echo esc_url( home_url( '/' ) ) ;?>wp-content/uploads/2021/09/sales-banner.jpg" alt="">
		<?php } ?>
		<div class="innerBannerText">
			<!-- <h3>Virtual<br>
				Tour</h3> -->
		</div>
	</div>
	<main id="main">
		<div class="recentDetails">
			<div class="walkThrourhHeading commn-layout py-5">
				<div class="container-fluid p-0">
					<div class="row no-gutters">
						        
						<div class="col-lg-12">
							<div class="walkHead">
								<div class="width-auto">
									<h6></h6>
									<h2><?php the_title(); ?><span><?php echo $recentdetail_banner_heading1; ?></span></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			                      
			<div class="spectList py-5">
				<div class="container">
					<div class="row">
						       <?php 
						       $i=1;
                                     if(have_rows('residentials_properties')):
                                     while(have_rows('residentials_properties')): the_row();

                                     $icon = get_sub_field('icon');
                                     $text = get_sub_field('text'); 
                                      
                                ?>
						<div class="col-lg-3">
							<div class="spec1 <?php if($i==4){?>lastOne<?php } ?>">
								<div class="specOne">
									<img src="<?php echo $icon;?>" alt="<?php echo $icon; ?>">
								</div>
								<h5><?php echo $text; ?></h5>
							</div>
						</div>
						<?php $i++; endwhile; endif; ?>
					
						<div class="col-lg-12">
							<div class="specPara">
								<?php the_field('property_content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			  <?php
              $recentdetail_photo_gallery = get_field('property_gallery');
              $i=1;
          
if( $recentdetail_photo_gallery ):
             
           ?>
			<div class="photoGallery">
				<div class="container">
					<div class="parent">

						<?php foreach( $recentdetail_photo_gallery as $image_id ): ?>
						<div class="div<?php echo $i; ?>">
							<div class="galImgBox">
								<a href="<?php echo esc_url($image_id['url']); ?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo esc_url($image_id['url']); ?>" alt="<?php echo esc_url($image_id['alt']); ?>">
								</a>
							</div>
						</div>
						<?php $i++; endforeach; ?>
				
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		 
		 <?php
              
              $recentdetail_form_heading1 = get_field('recentdetail_form_heading1',529);
              $recentdetail_form_heading2 = get_field('recentdetail_form_heading2',529);
           ?>
		<section class="sec8 commn-layout grey-sec">
			<!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
			<div class="container position-relative text-center">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-xl-12 text-center ">
						<div class="width-auto">
							<h6><?php echo $recentdetail_form_heading; ?></h6>
							<h2><?php echo $recentdetail_form_heading2; ?></h2>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]');?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer();?>