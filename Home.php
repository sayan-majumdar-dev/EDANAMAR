<?php
/* Template Name: Home Page */

get_header();
?>
<?php

$banner_heading1 = get_field('banner_heading1');
$banner_heading2 = get_field('banner_heading2');
$banner_heading_name= get_field('banner_heading_name');
?>


    <div class="mainSlider">
        <img src="https://edanamar.com/wp-content/uploads/2022/02/client-face-1.png" class="client-face">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">

            <?php $count = 0; ?>
            <?php if (have_rows('banner_slider_item', 20)): ?>
                <div class="carousel-inner  homeslider bannerImage">
                    <?php while (have_rows('banner_slider_item', 20)) :
                        the_row(); ?>
                        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                            <img class="d-block w-100 desktop-img"
                                 src="<?php echo the_sub_field('banner_slider_image'); ?>"
                                 alt="First slide">
						<img src="https://edanamar.com/wp-content/uploads/2022/01/eden-scaled-mob.jpg" class="d-block w-100 mob-img" alt="">
                        </div>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
		  <div class="bannerHead" id="dynamic">
        <div id="horizontal" class="hscroll">

            <h1><span><?php echo $banner_heading_name; ?></span><?php echo $banner_heading1; ?> <?php echo $banner_heading2; ?></h1>
        </div>
    </div>

    <div class="search-prop">
		<i>Select Your Neighborhood</i>
        <form method="post" id="TEST">
            <input type="text" id="find" tabindex="1" placeholder="Select By Neighborhood">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    </div>
  

    <main id="main">
        <!-- ======= About Us ======= -->
        <?php

        $about_client_image = get_field('about_client_image');
        $about_client_logo = get_field('about_client_logo');
        $first_heading = get_field('first_heading');
        $second_heading = get_field('second_heading');
        $third_heading = get_field('third_heading');
        $paragraph = get_field('paragraph');


        ?>
        <section class="sec1 commn-layout">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 an1 boxanim aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="clnBox position-relative">
                            <img src="https://edanamar.com/wp-content/uploads/2021/11/solid-bg-client.jpg"
                                 class="w-100 tiltEffect"/>
                            <div class="clientLog">
                                <div class="iinerClintLog shinIng">
                                    <img src="<?php echo $about_client_logo['url']; ?>"
                                         alt="<?php echo $about_client_logo['alt']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 an2 boxanim aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="txt-box">
                            <div class="title-format">
                                <span><?php echo $first_heading; ?></span>
                                <h2><?php echo $second_heading; ?></h2>
                                <strong class="text-right"><?php echo $third_heading; ?></strong>
                            </div>
                        </div>
                        <p><?php echo $paragraph; ?></p> <br><br>
                        <?php
                        if (have_rows('button_item')):
                            while (have_rows('button_item')): the_row();
                                $button_anchor_tag = get_sub_field('button_anchor_tag');
                                $button_text = get_sub_field('button_text');
                                ?>
                                <a href="<?php echo $button_anchor_tag; ?>"
                                   class="boxred hvr-bounce-to-right"><?php echo $button_text; ?></a>
                            <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
            </div>
        </section><!-- End About Us -->


        <?php
        $listing_image = get_field('listing_image');
        $listing_heading = get_field('listing_heading');
        $listing_heading2 = get_field('listing_heading2');
        $listing_heading3 = get_field('listing_heading3');
        $listing_button_anchortag = get_field('listing_button_anchortag');
        $listing_button_text = get_field('listing_button_text');

        ?>
        <section class="sec2 commn-layout">
            <div class="container-fluid">
                <img src="<?php echo $listing_image['url']; ?>" alt="<?php echo $listing_image['alt']; ?>"
                     class="bg-img"/>
                <div class="gradient-bg"></div>
                <div class="container-fluid p-0 position-relative">


                    <div class="list-box">
                        <div class="card1 card-cmn">
                            <div class="txt-box">
                                <div class="title-format">
                                    <span><?php echo $listing_heading; ?></span>
                                    <h2><?php echo $listing_heading2; ?></h2>
                                    <strong class="text-right"><?php echo $listing_heading3; ?></strong>
                                </div>

                            </div>
                            <a href="<?php echo $listing_button_anchortag; ?>"
                               class="boxred hvr-bounce-to-right"><?php echo $listing_button_text; ?></a>
                        </div>
                        <?php

                        $include = array(846, 275, 887, 899, 267, 272, 996, 1115);

                        $propertiesarr = array(
                            'post_type' => 'properties',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'post__in' => $include,
                            'orderby' => 'post__in'

                        );
                        $propertiesqry = new WP_Query($propertiesarr);

                        if ($propertiesqry->have_posts()) {
                            ?>

                            <?php
                            $card = 1;

                            while ($propertiesqry->have_posts()):$propertiesqry->the_post();
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $description = get_field('description');

                                $card++;
                                if ($card < 10) {
                                    $card_class = "card" . $card;
                                    ?>
                                    <div class="<?php echo $card_class; ?> card-cmn an1 boxanim aos-animate"
                                         data-aos="fade-up"
                                         data-aos-delay="900">
                                        <img src="<?php echo $featured_img_url; ?>"/>
                                        <div class="box-txt">
                                            <span><?php the_content(); ?></span>
                                        </div>
                                        <div class="box-hvr">
                                            <p><?php the_title(); ?><?php echo $description; ?></p>
                                            <a href="<?php the_permalink(); ?>" class="boxred hvr-bounce-to-right">View
                                                details
                                                &nbsp; +</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php endwhile; ?>


                            <?php wp_reset_query();
                        } ?>


                    </div>
                </div>
            </div>
        </section>

        <?php
        $sec3_title = get_field('sec3_title');
        $sec3_title2 = get_field('sec3_title2');
        $sec3_title3 = get_field('sec3_title3');
        $bg_image = get_field('bg_image_communite');
        $button_text = get_field('button_text');
        $button_anchor = get_field('button_anchor');

        ?>

        <section class="sec3 commn-layout">
            <img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>" class="bg-img"/>
            <div class="gradient-bg1"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-txt">
                            <div class="title-format">
                                <span><?php echo $sec3_title; ?></span>
                                <h2><?php echo $sec3_title2; ?></h2>
                                <strong class="text-right"><?php echo $sec3_title3; ?></strong>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (have_rows('feature_communities_item')):
                        while (have_rows('feature_communities_item')): the_row();
                            $overlay_image = get_sub_field('overlay_image');
                            $image = get_sub_field('image');
                            $paragraph = get_sub_field('paragraph');
                            $feature_communities_anchortag = get_sub_field('feature_communities_anchortag');
                            ?>
                            <div class="col-xl-4 p-0">
                                <a href="<?php echo $feature_communities_anchortag; ?>" target="_blank">
                                    <div class="abt-box">
                                        <div class="content-overlay"><img src="<?php echo $overlay_image['url']; ?>"
                                                                          alt="<?php echo $overlay_image['alt']; ?>">
                                        </div>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                        <p><?php echo $paragraph; ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; endif; ?>
                    <div class="col-xl-12 d-flex justify-content-center mt-4">
                        <a href="<?php echo $button_anchor; ?>" 
                           class="get-started-btn boxred hvr-bounce-to-right"><?php echo $button_text; ?></a>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $sec4_layerd_image = get_field('sec4_layerd_image');
        $sec4_side_image = get_field('sec4_side_image2');
        $sec4_image = get_field('sec4_image');
        $sec4_heading = get_field('sec4_heading');
        $sec4_heading2 = get_field('sec4_heading2');
        $sec4_heading3 = get_field('sec4_heading3');
        $sec4_paragraph = get_field('sec4_paragraph');
        $sec4_btn_anchor = get_field('sec4_btn_anchor');
        $sec4_btn_anchor_text = get_field('sec4_btn_anchor_text');
        $sec4_video = get_field('sec4_video');
        ?>
        <section class="sec4 commn-layout p-0">
            <img src="<?php echo $sec4_layerd_image['url']; ?>" alt="<?php echo $sec4_layerd_image['alt']; ?>"
                 class="bg-img"/>
            <img src="<?php echo $sec4_side_image['url']; ?>" class="side-img mySide"
                 alt="<?php echo $sec4_side_image['alt']; ?>"/>
            <div class="gradient-bg"></div>
            <div class="container content-area" data-aos="zoom-in" data-aos-delay="200">
                <div class="row pt-5">
                    <div class="col-xl-4 an1 boxanim linear-img" data-aos="zoom-in" data-aos-delay="200">
                        <img class="tiltEffect" src="<?php echo $sec4_image['url']; ?>"
                             alt="<?php echo $sec4_image['alt']; ?>"/>
                    </div>
                    <div class="col-xl-8 an2 boxanim" data-aos="zoom-in" data-aos-delay="200">

                        <div class="title-format">
                            <span><?php echo $sec4_heading; ?></span>
                            <h2><?php echo $sec4_heading2; ?></h2>
                            <strong class="text-right"><?php echo $sec4_heading3; ?></strong>
                        </div>

                        <div class="d-flex custFlex">
                            <p><?php echo $sec4_paragraph; ?></p>
                            <a href="<?php echo $sec4_btn_anchor; ?>"
                               class="get-started-btn boxred hvr-bounce-to-right"><?php echo $sec4_btn_anchor_text; ?></a>
                        </div>
                        <!--
 --> <?php if (get_field('sec4_video')) {
                            the_field('sec4_video');
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5 commn-layout">
            <div class="container content-area" data-aos="fade-up">
                <div class="text-center slidImage">


                    <div class="logoSlide">
                        <div class="swiper-container mySwiper ourC">
                            <div class="swiper-wrapper">
                                <?php
                                if (have_rows('section5_items')):
                                    while (have_rows('section5_items')): the_row();
                                        $client_logo = get_sub_field('client_logo');

                                        ?>
                                        <div class="swiper-slide">
                                            <div class="cBox">
                                                <img src="<?php echo $client_logo['url']; ?>"
                                                     alt="<?php echo $client_logo['alt']; ?>"/>
                                            </div>
                                        </div>
                                    <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <?php
        $sec6_image1 = get_field('sec6_image1');
        $sec6_side_image = get_field('sec6_side_image');
        $sec6_heading = get_field('sec6_heading');
        $sec6_heading2 = get_field('sec6_heading2');
        $sec6_heading3 = get_field('sec6_heading3');
        $sec6_paragraph = get_field('sec6_paragraph');
        $sec6_btn_anchor = get_field('sec6_btn_anchor');
        $sec6_btn_anchor_text = get_field('sec6_btn_anchor_text');
        $sec6_video = get_field('sec6_video');
        $sec6_client_image = get_field('sec6_client_image');
        ?>
        <section class="sec6 commn-layout p-0">
            <img src="<?php echo $sec6_image1['url']; ?>" alt="<?php echo $sec6_image1['alt']; ?>" class="bg-img"/>
            <img src="<?php echo $sec6_side_image['url']; ?>" class="side-img cusCls"
                 alt="<?php echo $sec6_side_image['alt']; ?>"/>
            <div class="gradient-bg"></div>
            <div class="container content-area" data-aos="fade-up">
                <div class="row pt-5">
                    <div class="col-xl-9 an1 boxanim" data-aos="zoom-in" data-aos-delay="200">
                        <div class="cntn-size">
                            <div class="title-format">
                                <span><?php echo $sec6_heading; ?></span>
                                <h2><?php echo $sec6_heading2; ?></h2>
                                <strong class="text-right"><?php echo $sec6_heading3; ?></strong>
                            </div>
                            <div class="d-flex worlGrp">
                                <p><?php echo $sec6_paragraph; ?>
                                </p>
                                <a href="<?php echo $sec6_btn_anchor; ?>"
                                   class="get-started-btn boxred hvr-bounce-to-right"><?php echo $sec6_btn_anchor_text; ?></a>
                            </div>
                        </div>
                                     
                          </iframe>
                        <?php if (get_field('sec6_video')) {
                            the_field('sec6_video');
                        } ?>
                    </div>
                    <div class="col-xl-3 linear-img bottamClient an2 boxanim position-relative" data-aos="zoom-in"
                         data-aos-delay="200">
                        <div class="clImgBox">
                            <img class="tiltEffect" src="<?php echo $sec6_client_image['url']; ?>" class="mx-4"
                                 alt="<?php echo $sec6_client_image['alt']; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="extra commn-layout">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="heading">

                            <div class="title-format">
                                <span>06 </span>
                                <h2>Follow Us</h2>
                                <strong class="text-right">We are social</strong>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <ul class="socialMed">
                            <li><a href="javascrpt:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascrpt:void(0)"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="javascrpt:void(0)"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="instaGram">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                              <?php echo do_shortcode('[instagram-feed num=8]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <?php
        $bg_image = get_field('bg_image');
        $mobile_image = get_field('mobile_image');
        $sec7_heading = get_field('sec7_heading');
        $sec7_heading2 = get_field('sec7_heading2');
        $sec7_heading3 = get_field('sec7_heading3');
        $sec7_paragraph = get_field('sec7_paragraph');

        ?>
        <section class="sec7 commn-layout">
            <img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>" class="bg-img"/>
            <div class="gradient-bg1 h-100"></div>
            <div class="container position-relative text-center">
                <div class="row justify-content-center align-items-center flex-row-reverse" data-aos="fade-up"
                     data-aos-delay="100">

                    <div class="col-xl-7 col-lg-6">
                        <div class="cntn-size downLoad">
                            <p><?php echo $sec7_paragraph; ?></p>
                            <div class="txt-box">
                                <div class="title-format">
                                    <span><?php echo $sec7_heading; ?></span>
                                    <h2><?php echo $sec7_heading2; ?></h2>
                                    <strong class="text-right"><?php echo $sec7_heading3; ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 text-left">
                        <div class="mobileBg">
                            <img src="<?php echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $contact_heading = get_field('contact_heading');
        $contact_heading2 = get_field('contact_heading2');
        $contact_heading3 = get_field('contact_heading3');

        ?>
        <section class="sec8 commn-layout grey-sec">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
            <div class="container position-relative text-center">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-12 text-center ">
                        <div class="width-auto">
                            <div class="txt-box">
                                <div class="title-format">
                                    <span><?php echo $contact_heading; ?></span>
                                    <h2><?php echo $contact_heading2; ?></h2>
                                    <strong class="text-right"><?php echo $contact_heading3; ?></strong>
                                </div>
                            </div>
                        </div>

                        <?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]'); ?>

                    </div>
                </div>
            </div>

        </section>
    </main>
<?php get_footer(); ?>