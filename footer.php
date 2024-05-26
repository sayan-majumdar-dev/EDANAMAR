<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edanamar
 */

?>
<?php

$footer_gallery_heading = get_field('footer_gallery_heading', 'option');
$footer_gallery_heading2 = get_field('footer_gallery_heading2', 'option');
$footer_gallery_heading3 = get_field('footer_gallery_heading3', 'option');


?>

<footer id="footer" class="commn-layout">
    <div class="container">
        <div class="footerHead">
            <div class="title-txt">
                <div class="txt-box">
                    <div class="title-format">
                        <span><?php echo $footer_gallery_heading; ?></span>
                        <h2><?php echo $footer_gallery_heading2; ?></h2>
                        <strong class="text-right"><?php echo $footer_gallery_heading3; ?></strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (have_rows('gallery_item', 'option')):
                while (have_rows('gallery_item', 'option')): the_row();
                    $gallery_an1_image = get_sub_field('gallery_an1_image', 'option');

                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 p-0 an1 boxanim aos-animate" data-aos="fade-up"
                         data-aos-delay="900">
                        <div class="footerGall">
                            <img src="<?php echo $gallery_an1_image['url']; ?>"
                                 alt="<?php echo $gallery_an1_image['alt']; ?>">
                        </div>
                    </div>
                <?php endwhile; endif; ?>

            <?php
            if (have_rows('instagram_item', 'option')):
                while (have_rows('instagram_item', 'option')): the_row();

                    $gallery_an2_image = get_sub_field('gallery_an2_image', 'option');
                    ?>
                    <div class="col-xl-4 p-0 an2 boxanim aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="footerGall">
                            <img src="<?php echo $gallery_an2_image['url']; ?>"
                                 alt="<?php echo $gallery_an2_image['alt']; ?>">
                        </div>
                    </div>
                <?php endwhile; endif; ?>

        </div>


        <?php

        $middfooter_paragraph = get_field('middfooter_paragraph', 'option');
        $footer_logo_url = get_field('footer_logo_url', 'option');

        $footer_logo = get_field('footer_logo', 'option');


        ?>
        <div class="middFooter">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="midPara">
                        <p><?php echo $middfooter_paragraph; ?></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="<?php echo $footer_logo_url; ?>"><img src="<?php echo $footer_logo['url']; ?>"
                                                                   alt="<?php echo $footer_logo['alt']; ?>"></a>
                </div>
                <div class="col-lg-3">
                    <ul class="footerUl">
                        <?php
                        if (have_rows('middfooter_item', 'option')):
                            while (have_rows('middfooter_item', 'option')): the_row();
                                $middfooter_url = get_sub_field('middfooter_url', 'option');
                                $middfooter_url_text = get_sub_field('middfooter_url_text', 'option');
                                ?>
                                <li><a href="<?php echo $middfooter_url; ?>"><?php echo $middfooter_url_text; ?></a>
                                </li>
                            <?php endwhile; endif; ?>

                    </ul>
                </div>
            </div>
        </div>
        <hr class="hrClass">
        <div class="bottomFooter text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="footerMenu">

                            <ul class="cus_footer"> <?php wp_nav_menu(array('menu' => 'Footer_menu', 'container' => '', 'items_wrap' => '%3$s')); ?></ul>

                        </div>
                        <?php

                        $footerinfo_copyright = get_field('footerinfo_copyright', 'option');
                        $below_copyright_text = get_field('below_copyright_text', 'option');
                        $footer_sitemap_url = get_field('footer_sitemap_url', 'option');
                        $footer_sitemap_text = get_field('footer_sitemap_text', 'option');
                        $eppeok_logo_url = get_field('eppeok_logo_url', 'option');
                        $eppeok_logo_text = get_field('eppeok_logo_text', 'option');
                        $eppeok_logo = get_field('eppeok_logo', 'option');
                        $footerinfo_paragraph = get_field('footerinfo_paragraph', 'option');


                        ?>
                        <div class="footerInfo">
                            <!--<ul>
									<li><?php echo $footerinfo_copyright; ?></li>
									<li><?php echo $below_copyright_text; ?></li>
									<li><a href="<?php echo $footer_sitemap_url; ?>" ><?php echo $footer_sitemap_text; ?></a></li>
									<li><a href="<?php echo $eppeok_logo_url; ?>" target="_blank"><?php echo $eppeok_logo_text; ?><img class="eppeokLogo"
												src="<?php echo $eppeok_logo['url']; ?>" alt="<?php echo $eppeok_logo['alt']; ?>"></a></li>
								</ul>-->
                            <p>
                                Copyright © <?php echo date('Y'); ?> <?php echo $below_copyright_text; ?> <a
                                        href="<?php echo $footer_sitemap_url; ?>"><?php echo $footer_sitemap_text; ?></a>
                                <a href="<?php echo $eppeok_logo_url; ?>"
                                   target="_blank"><?php echo $eppeok_logo_text; ?><img class="eppeokLogo"
                                                                                        src="<?php echo $eppeok_logo['url']; ?>"
                                                                                        alt="<?php echo $eppeok_logo['alt']; ?>"></a>
                            </p>
                        </div>
                        <div class="footerPara">
                            <p><?php echo $footerinfo_paragraph; ?></p>
                        </div>

                        <?php

                        $socialicon_fb_url = get_field('socialicon_fb_url', 'option');
                        $socialicon_twitter_url = get_field('footer_twitter_url', 'option');
                        $socialicon_insta_url = get_field('socialicon_insta_url', 'option');

                        ?>
                        <div class="socialFooter">
                            <ul class="socialMed"><?php wp_nav_menu(array('theme_location'=>'social_menu' , 'container' => '','menu_class'=>'social_icon' , 'items_wrap' => '%3$s')); ?></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"
        integrity="sha256-X5PoE3KU5l+JcX+w09p/wHl9AzK333C4hJ2I9S5mD4M=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {

        jQuery(".cus_footer li > a").removeClass("nav-link");

        jQuery(".cus_footer li > a").removeClass("active");

    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        var availableCity = [
            "Bell Air",
            "Beverly Grove & Melrose",
            "Beverly Hills",
            "Beverly Hills Flats",
            "Birds Streets",
            "Brentwood",
            "Century City & Westwood",
            "Culver City",
            "Downtown LA",
            "Encino",
            "Hermosa Beach",
            "Hollywood",
            "Holmby Hills",
            "Korea Town",
            "Laurel Canyon",
            "Los Feliz & Silverlake",
            "Malibu",
            "Manhattan Beach",
            "Mid City",
            "Mount Olympus",
            "Pacific Palisades",
            "Platinum Triangle",
            "Rolling Hills",
            "Santa Monica",
            "Sherman Oaks",
            "Silverlake & Echo Park",
            "Studio City",
            "Sunset Strip",

        ];
        $("#find").autocomplete({
            source: availableCity
        });
        $("form").submit(function (e) {
            // Stop the form from submiting
            e.preventDefault()
            // Save a reference to the value
            let find = ($("#find").val())
            console.log(find);
            // Test the values from highest to lowest
            if (find == availableCity[0]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90049%2C%20Los%20Angeles%20(city)%3B90077%2C%20Los%20Angeles%20(city)%3B90077%2C%20Bel%20Air&keywordType=zipCode%3BzipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[1]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90036%2C%20Los%20Angeles%20(city)%3B90046%3B90048&keywordType=zipCode%3BzipCode%3BzipCode&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=12&rect=null", '_blank');
            } else if (find == availableCity[2]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90210%2C%20Beverly%20Hills%3B90211%2C%20Beverly%20Hills%3B90212%2C%20Beverly%20Hills&keywordType=zipCode%3BzipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[3]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90210%2C%20Beverly%20Hills&keywordType=zipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[4]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90069%2C%20Los%20Angeles%20(city)%3B90069%2C%20West%20Hollywood&keywordType=zipCode%3BzipCode&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000", '_blank');
            } else if (find == availableCity[5]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90069%2C+Los+Angeles+(city)%3B90069%2C+Bird+Street&keywordType=zipCode%3BzipCode", '_blank');
            } else if (find == availableCity[6]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&key=Westwood%2C%20Los%20Angeles%2C%20CA%3BWestwood%20Village%2C%20Los%20Angeles%2C%20CA%3BWestwood%20North%20Village%2C%20Los%20Angeles%2C%20CA%3BCentury%20City%2C%20Los%20Angeles%2C%20CA%3BWestwood%20-%20Century%20City&keywordType=neighborhood%3Bneighborhood%3Bneighborhood%3Bneighborhood%3Barea&minPrice-maxPrice=450000%2C100000000", '_blank');
            } else if (find == availableCity[7]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&key=Culver%20City%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[8]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&key=Downtown%2C%20Los%20Angeles%2C%20CA&keywordType=neighborhood", '_blank');
            } else if (find == availableCity[9]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&key=Encino%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[10]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&key=Hermosa%20Beach%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[11]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&key=Hollywood%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[12]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90077%2C%20Bel%20Air%3B90077%2C%20Los%20Angeles%20(city)%3BHolmby%20Hills%2C%20Los%20Angeles%2C%20CA&keywordType=zipCode%3BzipCode%3Bneighborhood&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[13]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90005%2C%20Los%20Angeles%20(city)%3B90006%2C%20Los%20Angeles%20(city)&keywordType=zipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[14]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90046%2C%20West%20Hollywood%3B90046%2C%20Los%20Angeles%20(city)%3B90048%2C%20West%20Hollywood%3B90048%2C%20Los%20Angeles%20(city)%3B90069%2C%20Los%20Angeles%20(city)%3B90069%2C%20West%20Hollywood&keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[15]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90027%2C%20Los%20Feliz%20(l)%3B90027%2C%20Los%20Angeles%20(city)%3B90026%2C%20Los%20Angeles%20(city)%3B90039%2C%20Silver%20Lake%20(l)%3B90039%2C%20Los%20Angeles%20(city)%3B90039%2C%20Echo%20Park%20(l)&keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000", '_blank');
            } else if (find == availableCity[16]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=11&rect=null&key=Malibu%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[17]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90266%2C%20Manhattan%20Beach&keywordType=zipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[18]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90019%2C%20Los%20Angeles%20(city)%3B90016%2C%20Los%20Angeles%20(city)&keywordType=zipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[19]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=map&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=12&rect=null&mapType=grid&key=Mount%20Olympus%2C%20Los%20Angeles%2C%20CA&keywordType=neighborhood", '_blank');
            } else if (find == availableCity[20]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=12&rect=null&mapType=grid&key=Pacific%20Palisades%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[21]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90210%2C+Los+Angeles+(city)%3B90210%2C+Beverly+Hills%3B90049%2C+Los+Angeles+(city)%3B90077%2C+Los+Angeles+(city)%3B90077%2C+Bel+Air&keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode", '_blank');
            } else if (find == availableCity[22]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90274%3B90274%2C+Rolling+Hills+Estates%3B90274%2C+Palos+Verdes+Estates%3B90274%2C+Rolling+Hills&keywordType=none%3BzipCode%3BzipCode%3BzipCode", '_blank');
            } else if (find == availableCity[23]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=map&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=13&rect=null&mapType=grid&key=Santa%20Monica%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[24]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=map&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=13&rect=null&mapType=grid&key=Sherman%20Oaks%2C%20Los%20Angeles%2C%20CA%3BSherman%20Oaks%2C%20CA&keywordType=neighborhood%3Bcity", '_blank');
            } else if (find == availableCity[25]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=90026%2C%20Silver%20Lake%20(l)%3B90026%2C%20Los%20Angeles%20(city)&keywordType=zipCode%3BzipCode&minPrice-maxPrice=450000%2C100000000&listingSort=RELEVANCE", '_blank');
            } else if (find == availableCity[26]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=map&purchaseType-For-Sale-Rent=1&listingSort=RELEVANCE&minPrice-maxPrice=450000%2C100000000&zoom=14&rect=null&mapType=grid&key=Studio%20City%2C%20CA&keywordType=city", '_blank');
            } else if (find == availableCity[27]) {
                window.open("https://edanamar.chime.me/search?version=2&page=1&pageSize=30&layoutType=grid&purchaseType-For-Sale-Rent=1&key=West+Hollywood%2C+CA&keywordType=city", '_blank');
            }
        });
    });
</script>
<!-- search widget-->
<script>const chimeWidget = document.getElementById('chimeWidget');window.addEventListener('message', function (e) {try {let data = JSON.parse(e.data);if(data.from === 'chimeSite' && data.event === 'updateBodyRect'){chimeWidget.style.height = data.data.height + 'px'}} catch (error) {console.log(error)}})</script>
</body>
</html>
