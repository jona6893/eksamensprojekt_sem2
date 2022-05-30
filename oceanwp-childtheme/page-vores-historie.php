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
    body {
    background-color: #FFFDFC;
  }
/* -------------------- MOBILE -------------------- */
/* ---------- SECTION1 ---------- */
    #section1{
        display: grid;
        justify-items: center;
        padding: 100px 2%;
    
    }
/* ---------- SECTION2 ---------- */
    #section2{
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));
        gap: 50px;
        padding: 0% 2%;
        align-items: center;
        justify-items: center;
    }
    #section2 p{
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        padding: 3%;
        max-width: 48ch;
    }
    .foto{
        background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/omos-scaled.webp");
        background-size:cover;
        background-position: 48%;
        width: 100%;
        height:100%;
        aspect-ratio: 1;
    }

    #section3{
            display: grid;
    justify-items: center;
    padding: 100px 0%;
    }

    #section4{
        display: grid;
    justify-items: center;
    padding: 100px 0%;
    }
/* ---------- SECTION3 ---------- */

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
    <p>Eace Gum blev startet af iværksætter-duoen Asbjørn Dencker og Ziggi Harttung i 2019. Virksomheden blev stiftet med en mission om at skabe et tyggegummi der udover at smage godt, også skulle hjælpe folk i hverdagen, ligemeget hvad man står overfor. 
<br><br>I maj 2020, lancerede Eace Gum deres første produkt i butikkerne, og siden er det gået stærkt. Idag har de tre fantastiske produkter: Vitamin Boost, der sørger for dine daglige essentials, Energy Boost der giver dig ekstra energi når du har brug for at gå et level op, og Healthy Teeth som sikrer frisk ånde og sunde tænder.</p>
    <!-- <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/omos-scaled.webp" alt=""> -->
    <div class="foto"></div>
</section>
<section id="section3">
  <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/seti.webp" alt="">
</section>
<section id="section4">
    <h2>Mød Founders</h2>
    <iframe title="vimeo-player" src="https://player.vimeo.com/video/671871303?h=a7c592fc40" width="640" height="360" frameborder="0" allowfullscreen></iframe>
</section>
</main>

<script>


</script>

<?php get_footer(); ?>