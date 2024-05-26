
<?php
/* Template Name: Test Page Page */

get_header();
?>

<div style="margin-top:250px;"></div>


<div style="display:block;" id="form0">
<form id="neighbor" name="qform" action="" method="post">
<select name="numbers" class="Nmenu" id="numbers" onchange="myFunction(this.value)">
<option value="1" selected="selected">I Want To Buy</option>
<option value="2">I Want To Rent</option>
</select><br>
<div id="forbuy">
<select class="Nmenu" id="buy" name="" onchange="selectChanged(this)">
<option value="">Please Choose Neighborhood..</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90049%2C%20Los%20Angeles%20(city)%3B90077%2C%20Los%20Angeles%20(city)%3B90077%2C%20Bel%20Air&amp;keywordType=zipCode%3BzipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">BEL AIR</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90036%2C%20Los%20Angeles%20(city)%3B90046%3B90048&amp;keywordType=zipCode%3BzipCode%3BzipCode&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=12&amp;rect=null
">BEVERLY GROVE &amp; MELROSE</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90210%2C%20Beverly%20Hills%3B90211%2C%20Beverly%20Hills%3B90212%2C%20Beverly%20Hills&amp;keywordType=zipCode%3BzipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">BEVERLY HILLS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90210%2C%20Beverly%20Hills&amp;keywordType=zipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">BEVERLY HILLS FLATS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90069%2C%20Los%20Angeles%20(city)%3B90069%2C%20West%20Hollywood&amp;keywordType=zipCode%3BzipCode&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000
">BIRD STREETS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90069%2C+Los+Angeles+(city)%3B90069%2C+Bird+Street&amp;keywordType=zipCode%3BzipCode
">BRENTWOOD</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;key=Westwood%2C%20Los%20Angeles%2C%20CA%3BWestwood%20Village%2C%20Los%20Angeles%2C%20CA%3BWestwood%20North%20Village%2C%20Los%20Angeles%2C%20CA%3BCentury%20City%2C%20Los%20Angeles%2C%20CA%3BWestwood%20-%20Century%20City&amp;keywordType=neighborhood%3Bneighborhood%3Bneighborhood%3Bneighborhood%3Barea&amp;minPrice-maxPrice=450000%2C100000000
">CENTURY CITY &amp; WESTWOOD</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;key=Culver%20City%2C%20CA&amp;keywordType=city
">CULVER CITY</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;key=Downtown%2C%20Los%20Angeles%2C%20CA&amp;keywordType=neighborhood
">DOWNTOWN LA</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;key=Encino%2C%20CA&amp;keywordType=city
">ENCINO</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;key=Hermosa%20Beach%2C%20CA&amp;keywordType=city
">HERMOSA BEACH</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;key=Hollywood%2C%20CA&amp;keywordType=city
">HOLLYWOOD</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90077%2C%20Bel%20Air%3B90077%2C%20Los%20Angeles%20(city)%3BHolmby%20Hills%2C%20Los%20Angeles%2C%20CA&amp;keywordType=zipCode%3BzipCode%3Bneighborhood&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">HOLMBY HILLS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90005%2C%20Los%20Angeles%20(city)%3B90006%2C%20Los%20Angeles%20(city)&amp;keywordType=zipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">KOREA TOWN</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90046%2C%20West%20Hollywood%3B90046%2C%20Los%20Angeles%20(city)%3B90048%2C%20West%20Hollywood%3B90048%2C%20Los%20Angeles%20(city)%3B90069%2C%20Los%20Angeles%20(city)%3B90069%2C%20West%20Hollywood&amp;keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">LAUREL CANYON</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90027%2C%20Los%20Feliz%20(l)%3B90027%2C%20Los%20Angeles%20(city)%3B90026%2C%20Los%20Angeles%20(city)%3B90039%2C%20Silver%20Lake%20(l)%3B90039%2C%20Los%20Angeles%20(city)%3B90039%2C%20Echo%20Park%20(l)&amp;keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000
">LOS FELIZ &amp; SILVERLAKE</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=11&amp;rect=null&amp;key=Malibu%2C%20CA&amp;keywordType=city
">MALIBU</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90266%2C%20Manhattan%20Beach&amp;keywordType=zipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">MANHATTAN BEACH</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90019%2C%20Los%20Angeles%20(city)%3B90016%2C%20Los%20Angeles%20(city)&amp;keywordType=zipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">MID-CITY</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=map&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=12&amp;rect=null&amp;mapType=grid&amp;key=Mount%20Olympus%2C%20Los%20Angeles%2C%20CA&amp;keywordType=neighborhood
">MOUNT OLYMPUS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=12&amp;rect=null&amp;mapType=grid&amp;key=Pacific%20Palisades%2C%20CA&amp;keywordType=city
">PACIFIC PALISADES</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90210%2C+Los+Angeles+(city)%3B90210%2C+Beverly+Hills%3B90049%2C+Los+Angeles+(city)%3B90077%2C+Los+Angeles+(city)%3B90077%2C+Bel+Air&amp;keywordType=zipCode%3BzipCode%3BzipCode%3BzipCode%3BzipCode">PLATINUM TRIANGLE</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90274%3B90274%2C+Rolling+Hills+Estates%3B90274%2C+Palos+Verdes+Estates%3B90274%2C+Rolling+Hills&amp;keywordType=none%3BzipCode%3BzipCode%3BzipCode">ROLLING HILLS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=map&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=13&amp;rect=null&amp;mapType=grid&amp;key=Santa%20Monica%2C%20CA&amp;keywordType=city
">SANTA MONICA</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=map&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=13&amp;rect=null&amp;mapType=grid&amp;key=Sherman%20Oaks%2C%20Los%20Angeles%2C%20CA%3BSherman%20Oaks%2C%20CA&amp;keywordType=neighborhood%3Bcity
">SHERMAN OAKS</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90026%2C%20Silver%20Lake%20(l)%3B90026%2C%20Los%20Angeles%20(city)&amp;keywordType=zipCode%3BzipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">SILVERLAKE &amp; ECHO PARK</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=map&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=14&amp;rect=null&amp;mapType=grid&amp;key=Studio%20City%2C%20CA&amp;keywordType=city
">STUDIO CITY</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=West+Hollywood%2C+CA&amp;keywordType=city">SUNSET STRIP</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;key=90210%2C%20Beverly%20Hills&amp;keywordType=zipCode&amp;minPrice-maxPrice=450000%2C100000000&amp;listingSort=RELEVANCE
">TROUSDALE ESTATES</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=30&amp;layoutType=map&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=15&amp;rect=null&amp;mapType=grid&amp;key=West%20Hollywood%2C%20CA&amp;keywordType=city
">WEST HOLLYWOOD</option>
<option value="https://edanamar.chime.me/search?version=2&amp;page=1&amp;pageSize=24&amp;layoutType=grid&amp;purchaseType-For-Sale-Rent=1&amp;listingSort=RELEVANCE&amp;minPrice-maxPrice=450000%2C100000000&amp;zoom=14&amp;rect=null&amp;key=Venice%2C%20CA&amp;keywordType=city
">VENICE</option>
</select>
</div>
<div id="forrent" style="display:none;">
<select class="Nmenu" id="rent" name="" onchange="selectChanged(this)">
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">Please Choose...</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BEL AIR</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BEVERLY GROVE &amp; MELROSE</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BEVERLY HILLS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BEVERLY HILLS FLATS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BIRD STREETS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">BRENTWOOD</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">CENTURY CITY &amp; WESTWOOD</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">CULVER CITY</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">DOWNTOWN LA</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">ENCINO</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">HERMOSA BEACH</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">HOLLYWOOD</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">HOLMBY HILLS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">KOREA TOWN</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">LAUREL CANYON</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">LOS FELIZ &amp; SILVERLAKE</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">MALIBU</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">MANHATTAN BEACH</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">MID-CITY</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">MOUNT OLYMPUS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">PACIFIC PALISADES</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">PLATINUM TRIANGLE</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">ROLLING HILLS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">SANTA MONICA</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">SHERMAN OAKS</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">SILVERLAKE &amp; ECHO PARK</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">STUDIO CITY</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">SUNSET STRIP</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">TROUSDALE ESTATES</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">WEST HOLLYWOOD</option>
<option value="https://edanamar.chime.me/listing?version=2&amp;zoom=13&amp;rect=null&amp;layoutType=grid&amp;page=1&amp;listingSort=RELEVANCE&amp;pageSize=50">VENICE</option>
</select>
</div>
<input class="btn-lined search-submit" type="submit" value="SEARCH">
</form></div>








	<?php get_footer();?>



	<script type="text/javascript">
function selectChanged(ctrl) {
    var val = ctrl.value;
    var frm = document.getElementById('neighbor');
    frm.action = val;
  }
  
function myFunction(){
    var x = document.getElementById("numbers").value;
        if(x = 2){
            document.getElementById("forbuy").style.display = "none";
            document.getElementById("forrent").style.display = "block";
        }else if (x = 1){
            document.getElementById("forbuy").style.display = "block";
            document.getElementById("forrent").style.display = "none";
        }
}   
</script>