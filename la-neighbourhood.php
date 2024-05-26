<?php
/* Template Name: la-neighbourhood Page */

get_header();
?>

<?php
$neighbour_inner_image = get_field('neighbour_inner_image');
$neighbour_inner_heading = get_field('neighbour_inner_heading');
?>

    <div class="innerPage">
        <img src="<?php echo $neighbour_inner_image ['url']; ?>" alt="<?php echo $neighbour_inner_image ['alt']; ?>">
        <div class="innerBannerText">
            <h3><?php echo $neighbour_inner_heading; ?></h3>
        </div>
    </div>
<?php
$neighbour_about_heading = get_field('neighbour_about_heading');
$neighbour_about_heading2 = get_field('neighbour_about_heading2');
?>
    <main id="main">
        <!-- ======= About Us ======= -->
        <div class="neighBourPage commn-layout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="width-auto py-5">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $neighbour_about_heading; ?></h2>
                                    <strong class="text-right"><?php echo $neighbour_about_heading2; ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="sec3 commn-layout">
                <div class="container position-relative">
                    <div class="row">

                        <?php
                        if (have_rows('communities_item')):
                            while (have_rows('communities_item')): the_row();
                                $overlays_image = get_sub_field('overlays_image');
                                $communities_image = get_sub_field('communities_image');
                                $communities_anchortag = get_sub_field('communities_anchortag');

                                $communities_paragraph = get_sub_field('communities_paragraph');
                                ?>
                                <div class="col-xl-4 p-0 card_class" style="display: none;">
                                    <a href="<?php echo $communities_anchortag; ?>">
                                        <div class="abt-box">
                                            <div class="content-overlay"><img
                                                        src="<?php echo $overlays_image['url']; ?>"
                                                        alt="<?php echo $overlays_image['alt']; ?>"></div>
                                            <img src="<?php echo $communities_image['url']; ?>"
                                                 alt="<?php echo $communities_image['alt']; ?>">
                                            <p><?php echo $communities_paragraph; ?></p>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; endif; ?>

                        <div class="col-xl-12 d-flex justify-content-center mt-4">
                            <a href="" id="more_jobsd" class="get-started-btn boxred hvr-bounce-to-right">Load More
                                +</a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <?php
        $neighbour_form_heading = get_field('neighbour_form_heading');
        $neighbour_form_heading2 = get_field('neighbour_form_heading2');
        ?>
        <section class="sec8 commn-layout grey-sec">
            <!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
            <div class="container position-relative text-center">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-12 text-center ">
                        <div class="width-auto">
                            <div class="txt-box">
                                <div class="title-format">
                                    <h2><?php echo $neighbour_form_heading; ?></h2>
                                    <strong class="text-right"><?php echo $neighbour_form_heading2; ?></strong>
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
            jQuery("div.card_class").slice(0, 9).show();
            jQuery("#more_jobsd").on('click', function (e) {
                e.preventDefault();
                jQuery("div.card_class:hidden").slice(0, 6).slideDown();
                if (jQuery("div.card_class:hidden").length == 0) {
                    jQuery("#more_jobsd").remove();
                }
            });
        });


    </script>
<?php get_footer(); ?>