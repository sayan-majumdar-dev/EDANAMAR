
<?php
/* Template Name: Virtualtour Page */

get_header();
?>

       <?php
              
              $virtual_banner_image = get_field('virtual_banner_image');
              $virtual_banner_heading = get_field('virtual_banner_heading');
           ?>

<div class="innerPage">
		<img src="<?php echo $virtual_banner_image['url'];?>" alt="<?php echo $virtual_banner_image['alt']; ?>">
		<div class="innerBannerText">
			<h3><?php echo $virtual_banner_heading; ?></h3>
		</div>
	</div>
	   <?php
              
              $virtual_main_image = get_field('virtual_main_image');
              $virtual_main_heading = get_field('virtual_main_heading');
              $virtual_main_paragraph = get_field('virtual_main_paragraph');
             
           ?>
	<main id="main">

		<div class="virtualTour">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="virB">
							<img src="<?php echo $virtual_main_image['url'];?>" alt="<?php echo $virtual_main_image['alt']; ?>">
						</div>
					</div>

					<div class="col-lg-5">
						<div class="vA">
							<h4><?php echo $virtual_main_heading; ?></h4>
							<p><?php echo $virtual_main_paragraph; ?></p>
						</div>
					</div>

				</div>

			</div>

		</div>

             <?php
              
              $video_section_heading= get_field('video_section_heading');
              $video_section_heading2 = get_field('video_section_heading2');
              $video_section_paragraph = get_field('video_section_paragraph');
             
           ?>
		<div class="walkThrourhHeading commn-layout">
			<div class="container-fluid p-0">
				<div class="row no-gutters">
					<div class="col-lg-12">
						<div class="walkHead">
							<div class="width-auto">
                                <div class="txt-box">
                                    <div class="title-format">
                                        <h2><?php echo $video_section_heading; ?></h2>
                                        <strong class="text-right"><?php echo $video_section_heading2; ?></strong>
                                    </div>
                                </div>
								<div class="font_box">
									<p><?php echo $video_section_paragraph; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="virTuar">
			<div class="container">
				<div class="row">
					    <?php 
                              if(have_rows('video_item')):
                               while(have_rows('video_item')): the_row(); 
                               	$virtual_videos_anchortag = get_sub_field('virtual_videos_anchortag');
                               $virtual_videos = get_sub_field('virtual_videos');
                    
                                ?>
					<div class="col-lg-6">
						<div class="virImg">
							<a href="<?php echo $virtual_videos_anchortag; ?>"><img src="<?php echo $virtual_videos['url'];?>" alt="<?php echo $virtual_videos['alt']; ?>"></a>
 							<!-- <?php if(get_field('virtual_videos')){ the_field('virtual_videos'); } ?> -->

						</div>
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
            <?php
              $yourdigital_image = get_field('yourdigital_image');
              $yourdigital_heading= get_field('yourdigital_heading');
              $yourdigital_heading2 = get_field('yourdigital_heading2');
              $yourdigital_paragraph = get_field('yourdigital_paragraph');
             
           ?>

		<div class="yourDigital py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="youDImg">
							<img src="<?php echo $yourdigital_image['url'];?>" alt="<?php echo $yourdigital_image['alt']; ?>">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="yourDipar commn-layout">
							<div class="walkHead">
								<div class="width-auto">
                                    <div class="txt-box">
                                        <div class="title-format">
                                            <h2><?php echo $yourdigital_heading; ?></h2>
                                            <strong class="text-right"><?php echo $yourdigital_heading2; ?></strong>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="urParaDigi">
							<p><?php echo $yourdigital_paragraph; ?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="gridsq">
			<div class="container">
				    <?php 
                              if(have_rows('yourdigital_item')):
                               while(have_rows('yourdigital_item')): the_row(); 
                               $container_even_image = get_sub_field('container_even_image');
                               $container_even_heading = get_sub_field('container_even_heading');
                               $container_even_paragraph = get_sub_field('container_even_paragraph');

                               $container_odd_image = get_sub_field('container_odd_image');
                               $container_odd_heading = get_sub_field('container_odd_heading');
                               $container_odd_paragraph = get_sub_field('container_odd_paragraph');
                    
                                ?>
				<div class="row align-items-center">
					   
					<div class="col-lg-7 mt-5">
						<div class="virB">
							<img src="<?php echo $container_even_image['url'];?>" alt="<?php echo $container_even_image['alt']; ?>">
						</div>
					</div>

					<div class="col-lg-5 mt-5">
						<div class="vA evenDv">
							<h4><?php echo $container_even_heading; ?></h4>
							<p><?php echo $container_even_paragraph; ?></p>
						</div>
					</div>



					<div class="col-lg-5 mt-5">
						<div class="vA oddDv">
							<h4><?php echo $container_odd_heading; ?></h4>
							<p><?php echo $container_odd_paragraph; ?></p>
						</div>
					</div>


					<div class="col-lg-7 mt-5">
						<div class="virB">
							<img src="<?php echo $container_odd_image['url'];?>" alt="<?php echo $container_odd_image['alt']; ?>">
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
             <?php
              
              $virtual_features_heading = get_field('virtual_features_heading');
              $virtual_features_heading2 = get_field('virtual_features_heading2');
             
           ?>

		<div class="youRpowerFullHead neighBourPage commn-layout">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="width-auto pt-5">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $virtual_features_heading; ?></h2>
                                    <strong class="text-right"><?php echo $virtual_features_heading2; ?></strong>
                                </div>
                            </div>
						</div>
					</div>
					    <?php 
                              if(have_rows('virtual_featurre_item')):
                               while(have_rows('virtual_featurre_item')): the_row(); 
                               $virtual_featurre_image = get_sub_field('virtual_featurre_image');
                               $virtual_featurre_heading = get_sub_field('virtual_featurre_heading');
                               $virtual_featurre_paragraph = get_sub_field('virtual_featurre_paragraph');
                    
                                ?>
					<div class="col-lg-4">
						<div class="moduleBoxA">
							<div class="mImg">
								<img src="<?php echo $virtual_featurre_image['url'];?>" alt="<?php echo $virtual_featurre_image['alt']; ?>">
							</div>
							<h5><?php echo $virtual_featurre_heading; ?></h5>
							<p><?php echo $virtual_featurre_paragraph; ?></p>
						</div>

					</div>
                 <?php endwhile; endif; ?>

				</div>

			</div>
		</div>
		  <?php
                        $virtual_form_heading = get_field('virtual_form_heading');
                        $virtual_form_heading2 = get_field('virtual_form_heading2');   
              ?>
		<section class="sec8 commn-layout grey-sec">
			<!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
			<div class="container position-relative text-center">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-xl-12 text-center ">
						<div class="width-auto">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $virtual_form_heading; ?></h2>
                                    <strong class="text-right"><?php echo $virtual_form_heading2; ?></strong>
                                </div>
                            </div>
						</div>
						
							<?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]');?>
						
					</div>
				</div>
			</div>
		</section>

	</main>
	<?php get_footer();?>