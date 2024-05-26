
<?php
/* Template Name: About Page */

get_header();
?>
   <?php
              
              $about_banner_image = get_field('about_banner_image');
              $about_banner_heading = get_field('about_banner_heading');
           ?>
<div class="innerPage">

		<img src="<?php echo $about_banner_image['url'];?>" alt="<?php echo $about_banner_image['alt']; ?>">
		<div class="innerBannerText">
			<h3><?php echo $about_banner_heading; ?></h3>
		</div>
	</div>
	   <?php
              
              $client_image = get_field('client_image');
              $logo= get_field('logo');
              $box_heading = get_field('box_heading');
              $box_heading2 = get_field('box_heading2');
              $box_paragraph = get_field('box_paragraph');
              
           ?>
	<main id="main">
		<!-- ======= About Us ======= -->
		<section class="sec1 commn-layout innerPagesec1">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-6 an1 boxanim aos-animate" data-aos="fade-up" data-aos-delay="900">
						<div class="clnBox position-relative">
							<img src="<?php echo $client_image['url'];?>" alt="<?php echo $client_image['alt']; ?>" class="w-100 tiltEffect" />
							<div class="clientLog">
								<div class="iinerClintLog shinIng">
									<img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 an2 boxanim aos-animate" data-aos="fade-up" data-aos-delay="900">
						<div class="txt-box">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $box_heading; ?></h2>
                                    <strong class="text-right"><?php echo $box_heading2; ?></strong>
                                </div>
                            </div>
							<p><?php echo $box_paragraph; ?></p>
							<ul class="addUlAbout">

								  <?php 
                                      if(have_rows('about_item')):
                                      while(have_rows('about_item')): the_row(); 
                                      $text = get_sub_field('text');
                    
                                ?>
								<li><?php echo $text; ?></li>
								 <?php endwhile; endif; ?>
							</ul>
							<br><br>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End About Us -->
		   <?php
              $bg_image = get_field('bg_image');
              $side_image = get_field('side_image');
              $heading = get_field('heading');
              $heading2 = get_field('heading2');
              $paragraph = get_field('paragraph');
              $button_anchor = get_field('button_anchor');
              $button_anchor_text = get_field('button_anchor_text');
              $video = get_field('video');
              $clients_image = get_field('clients_image');
             ?>
		<section class="sec6 commn-layout p-0">
			<img src="<?php echo $bg_image['url'];?>" alt="<?php echo $bg_image['alt']; ?>" class="bg-img" />
			<img src="<?php echo $side_image['url'];?>" class="side-img cusCls" alt="<?php echo $side_image['alt']; ?>" />
			<div class="gradient-bg"></div>
			<div class="container content-area" data-aos="fade-up">
				<div class="row pt-5">
					<div class="col-xl-9 an1 boxanim" data-aos="zoom-in" data-aos-delay="200">
						<div class="cntn-size">
                            <div class="txt-box">
                                <div class="txt-box">
                                    <div class="title-format">
                                        <h2><?php echo $heading; ?></h2>
                                        <strong class="text-right"><?php echo $heading2; ?></strong>
                                    </div>
                                </div>
							<div class="d-flex worlGrp">
								<p><?php echo $paragraph; ?>
								</p>
								<a href="<?php echo $button_anchor; ?>" class="get-started-btn boxred hvr-bounce-to-right"><?php echo $button_anchor_text; ?></a>
							</div>
						</div>

						</div>
						<!-- <img src="<?php echo $video['url'];?>"  class="w-100"alt="<?php echo $video['alt']; ?>" />-->
                               <?php if(get_field('video')){ the_field('video'); } ?>
					
				</div>
				<div class="col-xl-3 linear-img bottamClient an2 boxanim position-relative" data-aos="zoom-in"
						data-aos-delay="200">
						<div class="clImgBox">
							<img class="tiltEffect" src="<?php echo $clients_image['url'];?>" alt="<?php echo $clients_image['alt']; ?>" />
						</div>
					</div>
			</div>
		</section>
		     <?php
              $about_contact_heading = get_field('about_contact_heading');
              $about_contact_heading2 = get_field('about_contact_heading2');
            
             ?>
		<section class="sec8 commn-layout grey-sec">
			<!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
			<div class="container position-relative text-center">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-xl-12 text-center ">
						<div class="width-auto">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $about_contact_heading; ?></h2>
                                    <strong class="text-right"><?php echo $about_contact_heading2; ?></strong>
                                </div>
                            </div>
						</div>
						<form class="mt-4">
							<?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]');?>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer();?>