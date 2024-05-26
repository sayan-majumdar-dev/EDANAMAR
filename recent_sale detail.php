<?php
/* Template Name: recent sale Page */

get_header();
?>

         <?php
              $recentdetail_banner_image = get_field('recentdetail_banner_image');
              $recentdetail_banner_heading1 = get_field('recentdetail_banner_heading1');
              $recentdetail_banner_heading2 = get_field('recentdetail_banner_heading2');
           ?>
<div class="innerPage laNeigh propertyVideosPage">
		<img src="<?php echo $recentdetail_banner_image['url'];?>" alt="<?php echo $recentdetail_banner_image['alt']; ?>">
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
									<h6><?php echo $recentdetail_banner_heading1; ?></h6>
									<h2><?php echo $recentdetail_banner_heading2; ?></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			                        <?php 
			                          $recentdetail_containerlast_image = get_field('recentdetail_containerlast_image');
                                      $recentdetail_containerlast_heading = get_field('recentdetail_containerlast_heading');
                                      $recentdetail_paragraph = get_field('recentdetail_paragraph'); 
                                     ?>
			<div class="spectList py-5">
				<div class="container">
					<div class="row">
						       <?php 
                                     if(have_rows('recentsale_item')):
                                     while(have_rows('recentsale_item')): the_row();

                                     $recentdetail_container_image = get_sub_field('recentdetail_container_image');
                                     $recentdetail_Container_heading = get_sub_field('recentdetail_Container_heading'); 
                                      
                                ?>
						<div class="col-lg-3">
							<div class="spec1">
								<div class="specOne">
									<img src="<?php echo $recentdetail_container_image['url'];?>" alt="<?php echo $recentdetail_container_image['alt']; ?>">
								</div>
								<h5><?php echo $recentdetail_Container_heading; ?></h5>
							</div>
						</div>
						<?php endwhile; endif; ?>
						<div class="col-lg-3">
							<div class="spec1 lastOne">
								<div class="specOne">
									<img src="<?php echo $recentdetail_containerlast_image['url'];?>" alt="<?php echo $recentdetail_containerlast_image['alt']; ?>">
								</div>
								<h5><?php echo $recentdetail_containerlast_heading; ?></h5>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="specPara">
								<p><?php echo $recentdetail_paragraph; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			  <?php
              $recentdetail_photo_gallery = get_field('recentdetail_photo_gallery');
              $recentdetail_photo2_gallery = get_field('recentdetail_photo2_gallery');

              $recentdetail_photo_gallery2 = get_field('recentdetail_photo_gallery2');
              $recentdetail_photo2_gallery2 = get_field('recentdetail_photo2_gallery2');

              $recentdetail_photo_gallery3 = get_field('recentdetail_photo_gallery3');
              $recentdetail_photo2_gallery3 = get_field('recentdetail_photo2_gallery3');

              $recentdetail_photo_gallery4 = get_field('recentdetail_photo_gallery4');
              $recentdetail_photo2_gallery4 = get_field('recentdetail_photo2_gallery4');

              $recentdetail_photo_gallery5 = get_field('recentdetail_photo_gallery5');
              $recentdetail_photo2_gallery5 = get_field('recentdetail_photo2_gallery5');

              $recentdetail_photo_gallery6 = get_field('recentdetail_photo_gallery6');
              $recentdetail_photo2_gallery6 = get_field('recentdetail_photo2_gallery6');

              $recentdetail_photo_gallery7 = get_field('recentdetail_photo_gallery7');
              $recentdetail_photo2_gallery7 = get_field('recentdetail_photo2_gallery7');

              $recentdetail_photo_gallery8 = get_field('recentdetail_photo_gallery8');
              $recentdetail_photo2_gallery8 = get_field('recentdetail_photo2_gallery8');

              $recentdetail_photo_gallery9 = get_field('recentdetail_photo_gallery9');
              $recentdetail_photo2_gallery9 = get_field('recentdetail_photo2_gallery9');

             
           ?>
			<div class="photoGallery">
				<div class="container">
					<div class="parent">
						<div class="div1">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery['url'];?>" alt="<?php echo $recentdetail_photo2_gallery['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div2">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery2['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery2['url'];?>" alt="<?php echo $recentdetail_photo2_gallery2['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div3">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery3['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery3['url'];?>" alt="<?php echo $recentdetail_photo2_gallery3['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div4">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery4['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery4['url'];?>" alt="<?php echo $recentdetail_photo2_gallery4['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div5">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery5['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery5['url'];?>" alt="<?php echo $recentdetail_photo2_gallery5['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div6">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery6['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery6['url'];?>" alt="<?php echo $recentdetail_photo2_gallery6['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div7">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery7['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery7['url'];?>" alt="<?php echo $recentdetail_photo2_gallery7['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div8">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery8['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery8['url'];?>" alt="<?php echo $recentdetail_photo2_gallery8['alt']; ?>">
								</a>
							</div>
						</div>
						<div class="div9">
							<div class="galImgBox">
								<a href="<?php echo $recentdetail_photo_gallery9['url'];?>" class="fancybox-thumb" data-fancybox="group">
									<img src="<?php echo $recentdetail_photo2_gallery9['url'];?>" alt="<?php echo $recentdetail_photo2_gallery9['alt']; ?>">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 
		 <?php
              
              $recentdetail_form_heading1 = get_field('recentdetail_form_heading1');
              $recentdetail_form_heading2 = get_field('recentdetail_form_heading2');
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