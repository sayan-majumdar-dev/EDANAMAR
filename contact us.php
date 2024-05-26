
<?php
/* Template Name: contactus Page */

get_header();
?>
        <?php
              $contact_banner_image = get_field('contact_banner_image');
              $contact_banner_heading = get_field('contact_banner_heading');
           ?>
<div class="innerPage">
		<img src="<?php echo $contact_banner_image['url'];?>" alt="<?php echo $contact_banner_image['alt']; ?>">
		<div class="innerBannerText">
			<h3><?php echo $contact_banner_heading; ?></h3>
		</div>
	</div>
	<main id="main">
		<!-- ======= About Us ======= -->
		      <?php
              $contact_aboutus_section_heading = get_field('contact_aboutus_section_heading');
              $contact_aboutus_section_heading2 = get_field('contact_aboutus_section_heading2');
              $contact_aboutus_inner_heading = get_field('contact_aboutus_inner_heading');
           ?>
		<div class="contactPage commn-layout">
			<div class="container p-0">
				<div class="row">
					<div class="col-xl-5">
						<div class="contactUsInnerPage">
							<div class="width-auto">
                                <div class="txt-box">
                                    <div class="title-format">
                                        <h2><?php echo $contact_aboutus_section_heading; ?></h2>
                                        <strong class="text-right"><?php echo $contact_aboutus_section_heading2; ?></strong>
                                    </div>
                                </div>
							</div>
							<div class="contePara">
								<div class="roundText">
									<h6><?php echo $contact_aboutus_inner_heading; ?></h6>
									<div class="roundBox">
										<ul>
											  <?php 
                                                 if(have_rows('contact_aboutus_inner__item')):
                                                 while(have_rows('contact_aboutus_inner_item')): the_row(); 
                               	                 $contact_aboutus_inner_para = get_sub_field('contact_aboutus_inner_para');
                    
                                               ?>
											<li>
												<p><?php echo $contact_aboutus_inner_para; ?></p>
											</li>
											<?php endwhile; endif; ?>
										</ul>
									</div>
								</div>
								<div class="conTactUlInfo">
									<ul>
			
										    <?php 
                                                 if(have_rows('contact_aboutus_info_item')):
                                                 while(have_rows('contact_aboutus_info_item')): the_row(); 
                               	                 $contact_aboutus_info_image = get_sub_field('contact_aboutus_info_image');
                               	                 $contact_aboutus_info_para = get_sub_field('contact_aboutus_info_para');
                               	                 $contact_aboutus_info_url = get_sub_field('contact_aboutus_info_url');
                               	                 $contact_aboutus_info_urltext = get_sub_field('contact_aboutus_info_urltext');
                               	                 $contact_aboutus_info_url2 = get_sub_field('contact_aboutus_info_url2');
                               	                 $contact_aboutus_info_urltext2 = get_sub_field('contact_aboutus_info_urltext2');
                    
                                               ?>
										<li>
											<i><img src="<?php echo $contact_aboutus_info_image['url'];?>" alt="<?php echo $contact_aboutus_info_image['alt']; ?>"> </i>
											<p><?php echo $contact_aboutus_info_para; ?>
												<a href="<?php echo $contact_aboutus_info_url; ?>"><?php echo $contact_aboutus_info_urltext; ?></a>
												<a href="<?php echo $contact_aboutus_info_url2; ?>"><?php echo $contact_aboutus_info_urltext2; ?></a>
											</p>
										</li>
										<?php endwhile; endif; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					  <?php
                        $contact_main_inner_heading = get_field('contact_main_inner_heading');
                        $contact_main_inner_heading2  = get_field('contact_main_inner_heading2');
                        $contact_form_mainheading = get_field('contactus_form_mainheading');
                         $contact_form_mainheading2 = get_field('contactus_form_mainheading2');
                      ?>
					<div class="col-xl-7">
						<div class="contactUsInnerPage formSecPage">
							<div class="width-auto">
                                <div class="txt-box">
                                    <div class="title-format">
                                        <h2><?php echo $contact_form_mainheading; ?></h2>
                                        <strong class="text-right"><?php echo $contact_form_mainheading2; ?></strong>
                                    </div>
                                </div>
							</div>
							<div class="formMainPage">
								<h4><?php echo $contact_main_inner_heading; ?></h4>
								<h5><?php echo $contact_main_inner_heading2; ?></h5>
								
									<?php echo do_shortcode('[contact-form-7 id="452" title="Message Us"]');?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		    <?php
              $map_video = get_field('map_video');?>
		<div class="mapBox">
			<div class="container-fluid p-0">
				<div class="row no">
					<div class="col-lg-12">
						<div class="mainmapBox">
							<!-- <iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1559.3748221857218!2d-118.38894229269378!3d34.0900104256515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bea16fbfffff%3A0xce4b294b60497b41!2sKeller%20Williams%20-%20EDAN%20AMAR!5e0!3m2!1sen!2sin!4v1630475208076!5m2!1sen!2sin"
								style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
								<?php if(get_field('map_video')){ the_field('map_video'); } ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php get_footer();?>