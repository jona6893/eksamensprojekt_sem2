<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */
get_header(); ?>

<style>
/* -------------------- MOBILE -------------------- */
/* ---------- SECTION1 ---------- */
    #section1{
        display: grid;
        justify-items: center;
        padding-top: 5%;
        padding-bottom: 5%;
    }
    #section1 p {
        max-width: 45ch;
        text-align: center;
    }
/* ---------- SECTION2 ---------- */
    #section2{
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));
        gap: 50px;
        padding: 0% 11%;
        align-items: center;
    justify-items: center;
    }
    .foto{
        background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/omos-scaled.webp");
        background-size:cover;
        background-position: 48%;
        width: 100%;
        height:100%;

    }
    .blogpost-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        width: 80%;
        height: auto;
        display: grid;
        justify-items: start;
        padding: 14% 3%;
        min-height: 346px;
      }
/* ---------- SECTION3 ---------- */
#section3 {
    display: grid;
    width: 100%;
    padding-top: 5%;
    padding-bottom: 5%;
    justify-items: center;
}

.seti{
    padding-top: 5%;
    width: 60%;
}
/* ---------- SECTION4 ---------- */
#section4 {
    display: grid;
    width: 100%;
    padding-top: 5%;
    padding-bottom: 5%;
    justify-items: center;
}

/* -------------------- DESKTOP -------------------- */

@media (min-width: 750px) {

   
}
</style>
<main>
<section id="section1">
    <h1>VORES HISTORIE</h1>
    <p>Vi elsker tyggegummi og vi elsker innovation. Derfor startede vi Eace Gum. </p>
</section>
<section id="section2">
    <div class="blogpost-container">
    <h3>Iværksætter duo</h3>
    <p>Eace Gum blev startet af iværksætter-duoen Asbjørn Dencker og Ziggi Harttung i 2019. Virksomheden blev stiftet med en mission om at skabe et tyggegummi der udover at smage godt, også skulle hjælpe folk i hverdagen, ligemeget hvad man står overfor. 
<br><br>I maj 2020, lancerede Eace Gum deres første produkt i butikkerne, og siden er det gået stærkt. Idag har de tre fantastiske produkter: Vitamin Boost, der sørger for dine daglige essentials, Energy Boost der giver dig ekstra energi når du har brug for at gå et level op, og Healthy Teeth som sikrer frisk ånde og sunde tænder.</p>
</div>
    <!-- <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/omos-scaled.webp" alt=""> -->
    <div class="foto"></div>
</section>

<section id="section3">
    <h2>Set i</h2>
    <img class="seti" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/seti.webp?_t=1653909501" alt="seti">
</section>

<section id="section4">
    <h2>Mød founders</h2>
    <iframe src="https://player.vimeo.com/video/671871303?h=a7c592fc40" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
<p><a href="https://vimeo.com/671871303"></a><a href="https://vimeo.com/user103444425"></a><a href="https://vimeo.com"></a></p>
</section>

</main>

<script>


</script>

<?php get_footer(); ?>