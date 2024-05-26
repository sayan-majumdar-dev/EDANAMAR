<?php
/* Template Name: our-property Page */

get_header();
?>

<?php
$property_banner_image = get_field('property_banner_image');
$property_banner_heading = get_field('property_banner_heading');
$property_video_heading = get_field('property_video_heading');
$property_video_heading2 = get_field('property_video_heading2');

?>
<div class="innerPage">
    <img src="<?php echo $property_banner_image['url']; ?>" alt="<?php echo $property_banner_image['alt']; ?> ">
    <div class="innerBannerText">
        <h3><?php echo $property_banner_heading; ?></h3>
    </div>
</div>
<main id="main">
    <!-- ======= About Us ======= -->
    <div class="propertyVideosMainPage commn-layout">
        <div class="container">
            <div class="col-lg-12">
                <div class="width-auto">
                    <div class="txt-box">
                        <div class="title-format">
                            <h2><?php echo $property_video_heading; ?></h2>
                            <strong class="text-right"><?php echo $property_video_heading2; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="propertyVideosMainPageSecond">
        <div class="container">
            <div class="row">
                <?php
                if (have_rows('property_videos_item')):
                    while (have_rows('property_videos_item')): the_row();
                        $property_videos = get_sub_field('property_videos');
                        $property_videos_heading = get_sub_field('property_videos_heading');

                        //$property_videos_url = get_sub_field('property_videos_url');
                        //$property_videos_icon = get_sub_field('property_videos_icon');
                        //$property_videos_icon_text = get_sub_field('property_videos_icon_text');
                        ?>

                        <div class="col-lg-6 card_class" style="display: none;">
                            <div class="proboxVid custom_video">

                                <?php if (get_sub_field('property_videos')) {
                                    the_sub_field('property_videos');
                                } ?>
                                <?php if (get_sub_field('property_second_videos')) {
                                    the_sub_field('property_second_videos');
                                } ?>
                                <div class="vidSpec">
                                    <h3><?php echo $property_videos_heading; ?></h3>
                                    <!-- 								<a href="" class="boxred hvr-bounce-to-right"><img src="<?php echo $property_videos_icon['url']; ?>" alt="<?php echo $property_videos_icon['alt']; ?>"> <?php echo $property_videos_icon_text; ?></a>
 -->                            </div>
                            </div>
                        </div>

                    <?php endwhile; endif; ?>

                <div class="col-xl-12 d-flex justify-content-center mt-4">
                    <a href="" class="get-started-btn boxred hvr-bounce-to-right" id="more_jobsd">Load More +</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    $property_form_heading = get_field('property_form_heading');
    $property_form_heading2 = get_field('property_form_heading2');
    ?>
    <section class="sec8 commn-layout grey-sec">
        <!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
        <div class="container position-relative text-center">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 text-center ">
                    <div class="width-auto">
                        <div class="txt-box">
                            <div class="title-format">
                                <h2><?php echo $property_form_heading; ?></h2>
                                <strong class="text-right"><?php echo $property_form_heading2; ?></strong>
                            </div>
                        </div>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]'); ?>

                </div>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript">

    jQuery(document).ready(function () {
        console.log("nishikant")
        jQuery("div.card_class").slice(0, 4).show();
        jQuery("#more_jobsd").on('click', function (e) {
            e.preventDefault();
            jQuery("div.card_class:hidden").slice(0, 4).slideDown();
            if (jQuery("div.card_class:hidden").length == 0) {
                jQuery("#more_jobsd").remove();
            }
        });
    });


</script>
<?php get_footer(); ?>
