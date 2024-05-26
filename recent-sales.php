<?php
/* Template Name: recentsales detail Page */

get_header();
?>
<?php
$banner_image = get_field('banner_image');
$banner_heading = get_field('banner_heading');
$container_heading = get_field('container_heading');
$container_heading2 = get_field('container_heading2');



?>
<div class="innerPage laNeigh propertyVideosPage recentSales">
    <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
    <div class="innerBannerText">
        <h3><?php echo $banner_heading; ?></h3>
    </div>
</div>
<main id="main">

    <div class="recentSales recentDetails">
        <div class="container">
            <div class="parent">
                <div class="div1">
                    <div class="recentSalesHeading commn-layout">
                        <div class="walkHead">
                            <div class="width-auto">
                                <div class="title-format">
                                    <h2><?php echo $container_heading; ?></h2>
                                    <strong class="text-right"><?php echo $container_heading2; ?></strong>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                $propertiesarr = array(
                    'post_type' => 'properties',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
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
                        $card_class = "div" . $card;
                        ?>
                        <div class="<?php echo $card_class; ?>">
                            <div class="rBoxList">
                                <div class="card-cmn">
                                    <img src="<?php echo $featured_img_url; ?>">
                                    <div class="box-hvr">
                                        <p><?php the_title(); ?> <?php the_field('description'); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="boxred hvr-bounce-to-right">View
                                            details &nbsp; +</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>


                    <?php wp_reset_query();
                } ?>

            </div>

            <!---Load more STart--->
            <div class="loadMoreBox">
                <div class="row">


                    <?php

                    $propertiesarr2 = array(
                        'post_type' => 'properties',
                        'post_status' => 'publish',
                        'posts_per_page' => 100,
                        'offset' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $propertiesqry2 = new WP_Query($propertiesarr2);
                    if ($propertiesqry2->have_posts()) {

                        while ($propertiesqry2->have_posts()):$propertiesqry2->the_post();
                            ?>

                            <div class="col-lg-6 mrbox" style="display: none;"><!--col start-->
                                <div class="divBox">
                                    <div class="rBoxList">
                                        <div class="card-cmn">
                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                            <div class="box-hvr">
                                                <p><?php the_title(); ?> <?php the_field('description'); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="boxred hvr-bounce-to-right">View
                                                    details &nbsp; +</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col End-->
                        <?php endwhile; ?>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>


                </div>
            </div>
            <!--load more end-->


            <a href="javascript:void(0)" class="loadMore">Load More</a>
        </div>

    </div>
    <?php

    $recentsale_form_heading2 = get_field('recentsale_form_heading2');
    $recentsale_form_heading3 = get_field('recentsale_form_heading3');
    ?>

    <section class="sec8 commn-layout grey-sec">
        <!-- <img src="assets/img/newsl-bg.jpg" alt="" class="bg-img" /> -->
        <div class="container position-relative text-center">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 text-center ">
                    <div class="width-auto">
                        <div class="title-format">
                            <h2><?php echo $recentsale_form_heading2; ?></h2>
                            <strong class="text-right"><?php echo $recentsale_form_heading3; ?></strong>
                        </div>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="234" title="Get In Touch]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<script type="text/javascript">

    jQuery(document).ready(function () {
        //jQuery(".mrbox").slice(0, 2).show();
        jQuery(".loadMore").on('click', function (e) {
            //e.preventDefault();
            jQuery("div.mrbox:hidden").slice(0, 15).slideDown();
            if (jQuery("div.mrbox:hidden").length == 0) {
                jQuery(".loadMore").remove();
            }
        });
    });


</script>