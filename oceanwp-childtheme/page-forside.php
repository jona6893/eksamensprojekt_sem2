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

  html {
    scroll-behavior: smooth;
    scroll-padding-top: 160px;
  }

  body{
    background-color: var(--lyse-blaa); 
  }

  .streger {
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/streger3.png");
    background-size: cover;
  }
  /* -------------------- MOBIL -------------------- */

    /* -------------------- SPLASHBILLEDE SEKTION -------------------- */
  #splash-section {
    width: 100vw;
    height: 85vh;
    display: grid;
    grid-template-rows: 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    position: relative;
  }

  .column-right {
    position: relative;
    display: grid;
    place-items: center center;
    width: 100%;
    height: 100%;
  }

  .se_mere {
    position: absolute;
    bottom: 0;
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/expand_more_FILL0_wght400_GRAD0_opsz48.png");
    background-repeat: no-repeat;
    background-position-y: 24px;
    background-size: contain;
    aspect-ratio: 1 / 1;
    width: 48px;
    height: 72px;
    left: 50%;
    transform: translateX(-50%);
    cursor: pointer;
    animation-name: click-me;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-fill-mode: both;
  }

  .product-container {
    position: relative;
    display: grid;
    place-items: center center;
    width: 190px;
    /* right: 5vw; */
    /* top: -10%; */
    bottom: -7.5%;
  }

  .product {
    position: absolute;
    aspect-ratio: 64 / 120;
    background-color: black;
    width: 100%;
    /* transform-origin: 40% 140%; */
    background-size: cover;
    /* filter: brightness(0.4); */
    transition: transform 0.3s cubic-bezier(0.5, 1, 0.66, 1), width 0.3s cubic-bezier(0.5, 1, 0.66, 1), filter 0.3s cubic-bezier(0.5, 1, 0.66, 1);
  }

  .vitamin-boost {
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    background-image: url("https://ucarecdn.com/21559504-fb8f-4ef1-84f9-d4b00609a601/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2016.45.52.png");
  }

  .energy-boost {
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    background-image: url("https://ucarecdn.com/103a14b8-1b2b-4986-97ee-d77280cf8ed2/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2014.34.32.png");
  }

  .healthy-teeth {
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    background-image: url("https://ucarecdn.com/6dfe6abf-ff50-4566-93bd-d95bacf05b3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/EACE%20HEALTHY%20TEETH%20MOCKUP%20ISOLATED.jpg");
  }

  [data-index="1"] {
    z-index: 3;
    transform: rotateZ(-15deg);
    width: 105%;
    filter: brightness(1);
  }

  [data-index="1"]::after {
    content: "";
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/gum_pakke.svg);
    position: absolute;
    width: 100%;
    height: 30%;
    top: -30%;
    background-size: 100%;
    animation-name: animate-up;
    animation-iteration-count: 1;
    animation-duration: 0.3s;
    animation-timing-function: ease-in-out;
  }

  [data-index="2"] {
    z-index: 2;
    transform: rotateZ(-15deg);
  }

  [data-index="3"] {
    z-index: 1;
    transform: rotateZ(-15deg);
  }

  .fan-btn {
    position: absolute;
    padding: 16px 8px;
    border: 0;
    background-color: rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
    z-index: 10;
  }

  .fan-btn:hover {
    background-color: rgba(0, 0, 0, 0.3);
  }

  .previous {
    left: 12px;
  }

  .next {
    right: 12px;
  }

  .column-left {
    display: grid;
    grid-template-rows: 2fr 6fr 1fr;
    max-height: 600px;
    margin-block: auto;
  }

	.splash_text{
    font-family: "termina", sans-serif;
    font-weight: 800;
    font-style: normal;
		display: grid;
		height:auto;
		align-items: center;
    justify-items: center;
    grid-row: 2/3;
    white-space: pre-line;
    
	}

  .splash_text h1 {
    font-size: 3rem;
    padding-left: 60px;
    width: 320px;
  }

  .gum_type {
    font-style: italic;
    color: #c4ad84;
  }

  .gum-info {
    max-width: 36ch;
    padding-left: 60px;
    height: 130px;
  }

  /* splash billede mobil */
  @media (max-width: 800px) {
    #splash-section {
      grid-template-rows: 1fr 1fr;
      grid-template-columns: 1fr;
      height: 210vw;
    }

    .column-left {
      display: grid;
      grid-template-rows: 2fr 6fr 40vw;
    }

    .product-container {
      width: calc(50% - 50px);
      bottom: -25%;
    }
    
    .se_mere {
      /* bottom: -30vh; */
      display: none;
    }

    .gum-info {
      padding-left: 50px;
    }
  }

  @keyframes click-me {
    0%{
      animation-timing-function: ease-in;
      background-position-y: 24px;
    }

    25%{
      background-position-y: 0;
    }

    50%{
      animation-timing-function: cubic-bezier(0.33, 2.25, 0.65, 0.75);
      background-position-y: 0;
    }

    75%{
      background-position-y: 24px;
    }

    100%{
      transform: translateX(-50%) translateY(0px);
    }
  }

  @keyframes animate-up {
    0%{
      height: 0%;
      top: 0%;
    }
    100%{
      height: 30%;
      top: -30%;
    }
  }

  /* -------------------- KNAPPER PÅ SPLASHBILLEDE -------------------- */
  .splash_button {
    grid-row: 3/4;
    display: flex;
    flex-direction:column;
    gap: 20px;
  }

  .til_shop_knap {
    
    font-weight: 400;
    font-style: normal;
    background-color: white;
    color: var(--sort);
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    border: none;
    min-width: 200px;
    transition: color 0.2s, background-color 0.2s;
  }

  .til_abonnement_knap {
    
    font-weight: 400;
    font-style: normal;
    background-color: var(--sort);
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    border: none;
    min-width: 200px;
    transition: color 0.2s, background-color 0.2s;
  }

  .til_shop_knap:hover, .til_abonnement_knap:hover {
    color: var(--sort);
    background-color: white;
  }

  /* -------------------- DE SORTE BARRER -------------------- */
	#sort_bar1,	#sort_bar2{
		background-color: var(--sort);
		height: 200px;
		display: grid;
		align-items: center;
    justify-items: center;
    margin-top: 200px;
    margin-bottom: 200px;
    text-align: center;
	}

	#sort_bar1 h2, #sort_bar2 h2{
    font-family: "adrianna", sans-serif;
    font-weight: 800;
    font-style: normal;
		color:white;
		font-size: 1.3rem;
    visibility: hidden;
	}  

  .level {
    font-family: "adrianna", sans-serif;
    font-weight: 800;
    font-style: normal;
    color: #A2D8E5;
  }

  #sort_bar1, #sort_bar2 {
    background-size: contain;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position-y: 50%;
  }

  #sort_bar1 {
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/next_gen_1.svg");
  }

  #sort_bar2 {
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/level_up.svg");
  }

 

   /* -------------------- SEKTION OM OS MED PERNILLE BLUME -------------------- */
  #intro {
    display:grid;
  }
  .intro_om_os{
    width: 100%;
    display: grid;
    justify-items: center;
  } 
  .intro_om_os_text p{
    max-width: 48ch;
  }
  #intro .intro_start {
    text-align:center;
    margin-bottom: 100px;
  }
  #intro .intro_start h2 {
    font-size: 4rem;
  }
  .citat{
    text-align: center;
    padding-top: 5%;
  }
     /* -------------------- FIND OS HER SEKTION -------------------- */
 
  #find_os h2 {
    text-align: center;
    margin-top: 100px;
  } 
 
  #find_os .find_os_bar {
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/find%20os.png);
    background-size: 100%;
    background-attachment: revert;
    background-repeat: no-repeat;
    background-position: 50%;
    height: 50vh;
    width: 100%;
    background-color: var(--sort);
    margin-top: 80px;
  }
     /* -------------------- BLOG SEKTION -------------------- */
  #forside_blog .seneste_artikler{
    padding: 2% 10%;

  }
  .seneste_artikler h4, .seneste_artikler p {
    margin: 5px;

  }
  #forside_blog h2 {
    text-align: center;
    margin-block: 80px 20px;
  }
  #forside_blog .forside_hand {
    display: grid;
    justify-items: end;
  }
  /* -------------------- SoMe SEKTION -------------------- */
  #forside_some {
    margin-top: -100px;
  }
  
  #forside_some .some {
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/06/43-1-scaled.webp);
    background-size: cover;
    background-position: 100% 20%;
    height: 90vh;
  }
  #forside_some .some_text {
    text-align: center;
    margin: 20px;
    font-weight: 800;
    
  }
  #forside_some .some_text h2 {
    margin-bottom: 50px;
  }

  #forside_some .some_text button {
    background-color: transparent;
    color: var(--sort);
   box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
   border: none;
  } 
  /* ingen parallax til mobil */
  
  @media (hover: none) {
    #sort_bar1, #sort_bar2, .find_os_bar  {
      background-image: none;
    }

    #sort_bar1 h2, #sort_bar2 h2{
      visibility: visible;
    }
  }


  /* -------------------- DESKTOP -------------------- */

  @media (min-width: 800px) {
  .previous {
    /* left: -15px; */
  }

  .next {
    /* right: 55px; */
  }
    #sort_bar1, #sort_bar2{
      height: 400px;
    }
    #sort_bar1 h2, #sort_bar2 h2{
		font-size: 4.5rem;
	}
    #intro .intro_om_os{
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 100%;
    margin: auto;
    align-items: center;
    justify-items: center;
  }
  #intro .intro_start {
    text-align:center;
    margin-bottom: 60px;
  }
  #intro .intro_om_os img {
    grid-column: 1/2;
    
    justify-content: right;
    
  }

  .pernille2{
    width: 90%;
  }

  #intro {
    display: grid;
    justify-items: center;
    justify-content: center;
    width: 100%;
}
  #intro .intro_om_os_text {
    grid-column: 2/3;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 60px;
  }
  .omos{
    grid-column: 1/2;
    grid-row: 1/2;
  }
  .citat{
    text-align: center;
    font-style: italic; 
    padding-top: 10%;
    grid-column: 1/3;
    grid-row: 2/3;
    max-width
  }
  .citat h3{
  font-style: italic; 
}

  #intro .intro_start h2 {
    font-size: 5rem;
  }
  #find_os {
    margin-top:200px;
    margin-bottom: 200px;
  } 
  #find_os .find_os_bar {
    background-attachment: fixed;
    /* box-shadow: rgb(0 0 0 / 24%) 0px 0px 9px inset; */
    background-color: var(--sort);
  }
  #forside_blog .seneste_artikler {
    width: 500px;
    display: grid;
    margin-left: auto;
  }
  .seneste_artikler h4, .seneste_artikler p {
    margin: 0px;

  }

  .forside_hand img{
    max-width: 65%;
  }

  #forside_blog .forside_blog_indhold {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 400px 75px;
    
  }
  #forside_ blog .seneste_artikler {
    grid-column: 1/2;
  }
  #forside_blog .forside_hand {
    grid-column: 2/3;
    grid-row: 1/3;
  }
  
  #sort_bar2 {
    margin-top: 40px;
  }

  #forside_some {
    margin-top: -200px;
    display: grid;
    align-items: center;
    grid-template-columns: 1fr 1fr;
    justify-items: center;
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/06/43-1-scaled.webp);
    background-size: cover;
  }
  #forside_some p {
    font-family: "termina", sans-serif;
    font-size: 1.5rem;
    padding: 3%;
    font-weight: 700;
    
  }
  #forside_some .platforme {
    font-family: "sofia-pro", sans-serif;
    font-weight: 400;
    font-size: 1rem;
  }
 
     
}

  /* -------------------- testimonial -------------------- */

#testimonial {
  position: relative;
  padding-inline: 24px;
  margin-block: 80px 40px;
  height: 17.5rem;
}

.testimonial-container {
    position: absolute;
    top: 10%;
    text-align: center;
    width: clamp(100px, 25vw, 320px);
    display: flex;
    flex-direction: column;
    gap: 16px;
    transform: translateX(-50%);
    transition: left 0.75s ease-out, opacity 0.375s ease-in-out;
  } 

  .quote {
    font-size: 1rem;
  }

  [data-jndex="1"] {
    left: -20%;
    opacity: 0;
  }

  [data-jndex="2"] {
    left: 15%;
    opacity: 1;
  }

  [data-jndex="3"] {
    left: 50%;
    opacity: 1;
  }

  [data-jndex="4"] {
    left: 85%;
    opacity: 1;
  }

  [data-jndex="5"] {
    left: 120%;
    opacity: 0;
  }

  /* viser 1 i stedet for 3 på mobil */
  @media (max-width: 678px) {
    .testimonial-container {
      width: 80%;
    }

    [data-jndex="1"], [data-jndex="2"] {
      left: -50%;
      opacity: 0;
    }

    [data-jndex="3"] {
      left: 50%;
      opacity: 1;
    }

    [data-jndex="4"], [data-jndex="5"] {
      left: 150%;
      opacity: 0;
    }
  }

  .carousel-btn {
    position: absolute;
    padding: 16px 8px;
    border: 0;
    background-color: rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: background-color 0.3s, opacity 0.15s, transform 0.3s ease-in-out;
    z-index: 10;
    top: 30%;
    transform: translateY(-50%);
  }

  /* knapperne er altid synlige på mobil */
  @media (hover: none) {
    .carousel-btn {
      opacity: 1;
    }
  }

  #testimonial:hover .carousel-btn {
    opacity: 1;
    transform: translateX(0);
  }

  .carousel-btn:hover {
    background-color: rgba(0, 0, 0, 0.3);
  }

  .previous2 {
    left: 8px;
    transform: translateX(-6px);
  }

  .next2 {
    right: 8px;
    transform: translateX(6px);
  }

  /* rykker knapperne lidt ud til siderne så de ikke er ovenpå teksten */
  @media (min-width: 1200px) {
    .previous2 {
      left: -12px;
    }

    .next2 {
      right: -12px;
    }
  }

  .testimonial-container img {
    width: 200px;
    margin-inline: auto;
  }

  .testimonial-container > * {
    margin: 0;
  }
.musover{
  cursor: pointer;
}
	</style>

<main>
<section id="splash-section" class="max-width">
  <div class="column-left">
		<div class="splash_text">
  		<h1 class="heading">GUM + <strong class="gum_type"><br>VITAMIN <br>BOOST</strong> </h1>
      <p class="gum-info">Ét tyggegummi indeholder 25% af det anbefalede daglige indtag af 10 essentielle vitaminer: C, D, E, K, B1, B3, B6, B7, B9, B12.</p>
      <div class="splash_button">
        <button class="til_shop_knap" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/shop/";'>Shop Produkter</button>
        <button class="til_abonnement_knap" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/abonnement/";'>Opret abonnement</button>
      </div>
		</div>
	</div>
  <div class="column-right">
    <div class="product-container">
      <div data-index="1" class="product vitamin-boost"></div>
      <div data-index="2" class="product energy-boost"></div>
      <div data-index="3" class="product healthy-teeth"></div>
    </div>
    <button class="fan-btn previous">←</button>
    <button class="fan-btn next">→</button>
  </div>
  <a href="#intro" class="se_mere"></a>
</section>
  

<section class="streger">
<section id="sort_bar1">
	<h2>NEXT GENERATION CHEWING GUM </h2>
</section>
<section id="intro" class="max-width">
  <div class="intro_start">
  <h2>EACE GUM</h2>
  <p>Tyggegummi med funktioner for sundhed og velvære </p></div>
  <div class="intro_om_os">
  <img class="pernille2" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/06/pernille.webp" alt="Pernille Blume">
  <div class="intro_om_os_text">
    <div class="omos">
  <h2>Om Os</h2>
  <p>Vi er tyggegummi eksperter. Vi laver danskproduceret kvalitetstyggegummi, der kan meget mere end bare at smage ekstremt godt og give frisk ånde. Eace Gum indeholder nemlig samtidig funktioner for sundhed og velvære. Vi vil nemlig være en hjælpende hånd, som styrker dig i hverdagen, lige meget hvad du står overfor.</p>
</div>
<div class="citat">
<h3>"Jeg har altid vitamin tyggegummi fra Eace liggende i min taske" <br> <br> - Pernille Blume</h3>
</div>
</div>
  </div>  
</section>
<section id="find_os">
  <!-- <h2>Find Os Her</h2> -->
  <div class="find_os_bar"></div>
</section>

  

<section id="forside_blog">
  <h2>BLOGINDLÆG</h2>
  <div class="forside_blog_indhold">
  <div class="seneste_artikler">
    <h3>Seneste Blogindlæg</h3>
    <hr>
    <h4 class="musover" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/blog/";'>Alt om Energi Boost</h4>
    <p>Maj 12, 2022</p>
    <hr>
    <h4 class="musover" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/blog/";'>Eace Sommerfest</h4>
    <p>Maj 04, 2022</p>
    <hr>
    <h4 class="musover" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/blog/";'>NEXT GENERATION MERCH</h4>
    <p>December 17, 2021</p>
    <hr>
    <h4 class="musover" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/blog/";'>EN LILLE HJÆLP I JULEDAGENE</h4>
    <p>December 07, 2021</p>
    <hr>
  </div>
  <div class="forside_hand">
    <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/06/hand_pakke-1.webp" alt="">
  </div>
  </div>
</section>

<section id="sort_bar2">
	<h2>"WHEN YOU NEED TO <strong class="level">LEVEL</strong> UP"</h2>
</section>
</section>
<section id="forside_some"><div class="some_text"><h2>FØLG OS PÅ SOCIALE MEDIER</h2>
     <p>@eace_gum <br> <strong class="platforme">på alle platforme</strong></p>
    </div>
    <div class="some">
     
    </div>
    
    
</section>

<section id="testimonial" class="max-width">
    <article class="testimonial-container" data-jndex="1">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Lækkert tyggegummi med dejlig frisk smag! Kan varmt anbefales som supplement til den daglige kost."</i></p>
      <p class="quote_author"><b>Rasmus</b></p>
    </article>
    <article class="testimonial-container" data-jndex="2">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Når jeg alligevel tygger tyggegummi, så er det perfekt at jeg kan få mine vitaminer samtidigt"</i></p>
      <p class="quote_author"><b>Philip</b></p>
    </article>
    <article class="testimonial-container" data-jndex="3">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Fantastisk vitamintyggegummi som jeg helt sikkert kan anbefale. Herudover er der ekstraordinær god service ved bestilling. Helt klart 5 stjerner!"</i></p>
      <p class="quote_author"><b>Mikael</b></p>
    </article>
    <article class="testimonial-container" data-jndex="4">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Mega let måde at få mine vitaminer over den mørke vinter. Der udover giver den dig god mint-ånde."</i></p>
      <p class="quote_author"><b>Søren</b></p>
    </article>
    <article class="testimonial-container" data-jndex="5">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Skøn smag og en nem måde at få sine vitaminer. Får tilsendt en pakke månedligt og har aldrig haft nogen problemer."</i></p>
      <p class="quote_author"><b>Josefine</b></p>
    </article>
    <button class="carousel-btn previous2">←</button>
    <button class="carousel-btn next2">→</button>
  </section>

</main>

<script>

  //reference variabel til switch statement
  let theIndex;

  //vælger teksten
  const gumType = document.querySelector(".gum_type");
  const gumInfo = document.querySelector(".gum-info");

	/* konfigurer nedestående variabler efter behov */
	//antallet af produkter som er vist på splashbilledet
	const maxProductsIndex = 3;
	/* ^------------------------------------------^ */

	//laver en array af elementer med klassen .product
	const products = document.querySelectorAll(".product");

	//bladre frem knap
	document.querySelector(".next").addEventListener("click", () => {
    changeText();
		products.forEach((product) => {
			//hvis data-index værdien er lig med eller mindre end 1
			if (product.dataset.index <= 1) {
				//sæt data-index værdien til antallet af produkter
				product.dataset.index = maxProductsIndex;
			} else {
				//ellers træk 1 fra data-index værdien
				product.dataset.index--;
			}
    changeText();
		});
	});

	//bladre tilbage knap
	document.querySelector(".previous").addEventListener("click", () => {
		products.forEach((product) => {
			//hvis data-index værdien er lig med eller større end antallet af produkter
			if (product.dataset.index >= maxProductsIndex) {
				//sæt data-index værdien til 1
				product.dataset.index = 1;
			} else {
				//ellers læg 1 til data-index værdien
				product.dataset.index++;
			}
    changeText();
		});
	});

  function changeText() {
    theIndex = document.querySelector(".vitamin-boost").dataset.index;

    //ændre teksten
    switch(theIndex) {
      case "1": //vitamin boost
        gumType.style.color = "#c4ad84";
        gumType.textContent = "\r\nVITAMIN\nBOOST";
        gumInfo.textContent = "Ét tyggegummi indeholder 25% af det anbefalede daglige indtag af 10 essentielle vitaminer: C, D, E, K, B1, B3, B6, B7, B9, B12.";
        break;
      
      case "2": //healthy teeth
        gumType.style.color = "#449682";
        gumType.textContent = "\r\nHEALTHY\nTEETH";
        gumInfo.textContent = "Eace Gum + Healthy Teeth er et fantastisk godt tyggegummi, som indeholder fluor og grøn te ekstrakt, der sikrer frisk ånde og sunde tænder.";
        break;

      case "3": //energy boost
        gumType.style.color = "#57abc9";
        gumType.textContent = "\r\nENERGY\nBOOST";
        gumInfo.textContent = "Eace Gum + Energy Boost er et friskt tyggegummi, som indeholder koffein og B-vitaminer, der giver et øjeblikkeligt energi-tilskud.";
        break;
    }
  }
</script>
<script>
  /* konfigurer nedestående variabler efter behov */
	//antallet af anmeldelser
	const maxRatingsIndex = 5;
	/* ^------------------------------------------^ */

	//laver en array af elementer med klassen .testimonial-container
	const ratings = document.querySelectorAll(".testimonial-container");

  const carousel = document.getElementById("testimonial");

	//bladre frem knap
  const next2 = document.querySelector(".next2");
	next2.addEventListener("click", () => {
    //hvis karrousellen IKKE har klassen .animating
    if (!carousel.classList.contains("animating")) {
      //tilføj klassen .animating og sætter knapperne på pause indtil animationen er færdig
      carousel.classList.add("animating")
      ratings.forEach((rating) => {
        //hvis data-jndex værdien er lig med eller mindre end 1
        if (rating.dataset.jndex <= 1) {
          //sæt data-jndex værdien til antallet af produkter
          rating.dataset.jndex = maxRatingsIndex;
        } else {
          //ellers træk 1 fra data-jndex værdien
          rating.dataset.jndex--;
        }
      });

      //fjerner klassen .animating når animationen er færdig efter 750ms og gør knapperne klikbart igen
      setTimeout(() => {
        carousel.classList.remove("animating")
      }, "750") //750 millisekunder

    }
	});

	//bladre tilbage knap
  const previous2 = document.querySelector(".previous2");
	previous2.addEventListener("click", () => {
    //hvis karrousellen IKKE har klassen .animating
    if (!carousel.classList.contains("animating")) {
      //tilføj klassen .animating og sætter knapperne på pause indtil animationen er færdig
      carousel.classList.add("animating")
      ratings.forEach((rating) => {
        //hvis data-jndex værdien er lig med eller større end antallet af produkter
        if (rating.dataset.jndex >= maxRatingsIndex) {
          //sæt data-jndex værdien til 1
          rating.dataset.jndex = 1;
        } else {
          //ellers læg 1 til data-jndex værdien
          rating.dataset.jndex++;
        }
      });

      //fjerner klassen .animating når animationen er færdig efter 750ms og gør knapperne klikbart igen
      setTimeout(() => {
        carousel.classList.remove("animating")
      }, "750") //750 millisekunder

    }
	});
</script>


<?php get_footer(); ?>