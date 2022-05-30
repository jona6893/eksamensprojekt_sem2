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
 body{
  background-color: var(--lyse-blaa); 
 }
    /* -------------------- SPLASHBILLEDE SEKTION -------------------- */
#splash-section {
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    
  }

  .column-right {
    position: relative;
    display: grid;
    place-items: center center;
    width: 100%;
    height: 100%;
  }

  .product-container{
    position: relative;
    display: grid;
    place-items: center center;
    width: 35%;
    right: 4vw;
    top: -5%;
  }

  .product {
    position: absolute;
    aspect-ratio: 64 / 120;
    background-color: black;
    width: 100%;
    transform-origin: 40% 140%;
    background-size: cover;
    filter: brightness(0.4);
    transition: transform 0.3s cubic-bezier(0.5, 1, 0.66, 1), width 0.3s cubic-bezier(0.5, 1, 0.66, 1), filter 0.3s cubic-bezier(0.5, 1, 0.66, 1);
  }

  .vitamin-boost {
    background-image: url("https://ucarecdn.com/21559504-fb8f-4ef1-84f9-d4b00609a601/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2016.45.52.png");
  }

  .energy-boost {
    background-image: url("https://ucarecdn.com/103a14b8-1b2b-4986-97ee-d77280cf8ed2/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2014.34.32.png");
  }

  .healthy-teeth {
    background-image: url("https://ucarecdn.com/6dfe6abf-ff50-4566-93bd-d95bacf05b3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/EACE%20HEALTHY%20TEETH%20MOCKUP%20ISOLATED.jpg");
  }

  [data-index="1"] {
    z-index: 3;
    transform: rotateZ(-15deg);
    width: 105%;
    filter: brightness(1);
  }

  [data-index="2"] {
    z-index: 2;
    transform: rotateZ(5deg);
  }

  [data-index="3"] {
    z-index: 1;
    transform: rotateZ(25deg);
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

		#splashimage{
			width: 100%;
			height: 90vh;
			background-color: #F5F8FA;
			display:grid;
			grid-template-columns: 1fr 1fr;
			align-items: center;
		}
	#splashimage h1{
		font-size: 4rem;
	}
	.swiper {
  width: 37vh;
    height: auto;
}
.column-left {
  display: grid;
  grid-template-rows: 1fr 1fr 1fr
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
	}
  .splash_text h1 {
    font-size: 3rem;
  }
  .splash_vitamin {
    color: #354E57;
    font-style: italic;
  }
     /* -------------------- KNAPPER PÅ SPLASHBILLEDE -------------------- */
  .splash_button {
    grid-row: 3/4;
    display: flex;
    flex-direction:column;
    gap: 20px;
    
  }
  .til_shop_knap {
    font-family: "termina", sans-serif !important;
    font-weight: 400;
    font-style: normal;
    background-color: transparent;
    color: var(--sort);
   box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
   border: none;
   min-width: 200px;
   
  }
  .til_abonnement_knap {
    font-family: "termina", sans-serif !important;
    font-weight: 400;
    font-style: normal;
    background-color: var(--sort);
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    border: none;
    min-width: 200px;
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

	}
	#sort_bar1 h1, #sort_bar2 h1{
    font-family: "adrianna", sans-serif;
  font-weight: 800;
  font-style: normal;
		color:white;
		font-size: 1.3rem;
	}  
  .level {
    font-family: "adrianna", sans-serif;
  font-weight: 800;
  font-style: normal;
    color: var(--blaa);
    font-size: 1.3rem;
  }
   /* -------------------- SEKTION OM OS MED PERNILLE BLUME -------------------- */
  #intro {
    display:grid;
    margin-left: 50px;
    margin-right: 50px;
  }
  #intro .intro_start {
    text-align:center;
    margin-bottom: 100px;
  }
     /* -------------------- FIND OS HER SEKTION -------------------- */
  #find_os {
    position: sticky;
    padding: 20px;
    margin-top:100px;
    margin-bottom: 100px;
  }
  #find_os h1 {
    text-align: center;
    margin-bottom: 100px;
  }

     /* -------------------- BLOG SEKTION -------------------- */
  #forside_blog .seneste_artikler{
    padding: 2%;

  }
  #forside_blog h1 {
    text-align: center;
    margin-bottom: 100px;
  }
  #forside_blog .forside_hand {
    display: grid;
    justify-items: end;
  }
  /* -------------------- SoMe SEKTION -------------------- */

  #forside_some {
    margin-top: -200px;
  }
  #forside_some .some {
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/43.png);
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


  /* -------------------- DESKTOP -------------------- */

  @media (min-width: 750px) {
    #sort_bar1, #sort_bar2{
      height: 400px;
    }
    #sort_bar1 h1, #sort_bar2 h1{
		font-size: 4.5rem;
	}
  #intro .intro_om_os {
    display:grid;
    grid-template-columns: 1fr 1fr;
  }
  #intro .intro_om_os img {
    grid-column: 1/2;
    max-width: 70%;
    margin: auto;
  }
  #intro .intro_om_os_text {
    grid-column:2/3;
    max-width: 400px;

  }
  #find_os {
    padding: 40px;
    margin-top:200px;
    margin-bottom: 200px;
  }
  #forside_blog .seneste_artikler {
    padding: 2%;
    padding-left: 100px;
  }
  .forside_hand img{
    max-width: 65%;
  }

  #forside_blog .forside_blog_indhold {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 75px;
    
  }
  #forside_ blog .seneste_artikler {
    grid-column: 1/2;
  }
  #forside_blog .forside_hand {
    grid-column: 2/3;
    grid-row: 1/3;
  }
  
  #sort_bar2 {
    margin-top: -80px;
    z-index: -10;
  }
  #forside_some {
    display: grid;
    align-items: center;
    grid-template-columns: 1fr 1fr;
    justify-items: center;
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/43.png);
    background-size: cover;
  }
  #forside_some .some_text button {
    font-size: 2rem;
    padding: 3%;
  }
 
     
}


	</style>

<main>
<section id="splash-section">
  <div class="column-left">
		<div class="splash_text">
  		<h1>GUM + <strong class="splash_vitamin"><br>VITAMIN <br>BOOST</strong> </h1>
      <div class="splash_button">
        <button class="til_shop_knap" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/shop/";'>Shop Produkter</button>
        <button class="til_abonnement_knap" onClick = 'location.href = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/abonnement/";'>Design dit eget abonnement</button>
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
</section>

<section id="sort_bar1">
	<h1>NEXT GENERATION CHEWING GUM </h1>

</section>
<section id="intro">
  <div class="intro_start">
  <h1>EACE GUM</h1>
  <p>Tyggegummi med funktioner for sundhed og velvære </p></div>
  <div class="intro_om_os">
  <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/pernille.png" alt="Pernille Blume">
  <div class="intro_om_os_text">
  <h2>Om Os</h2>
  <p>Vi er tyggegummi eksperter. Vi laver danskproduceret kvalitetstyggegummi, der kan meget mere end bare at smage ekstremt godt og give frisk ånde. Eace Gum indeholder nemlig samtidig funktioner for sundhed og velvære. Vi vil nemlig være en hjælpende hånd, som styrker dig i hverdagen, lige meget hvad du står overfor.</p>
</div>
  </div>  
</section>
<section id="find_os">
  <h1>Find Os Her</h1>
  <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/butikker.png" alt="Find Eace Gum Tyggegummi i disse butikker">
</section>
<section id="forside_blog">
  <h1>BLOGINDLÆG</h1>
  <div class="forside_blog_indhold">
  <div class="seneste_artikler">
    <h3>Seneste Artikler</h3>
    <hr>
    <h4>Alt om Energi Boost</h4>
    <p>Maj 12, 2022</p>
    <hr>
    <h4>Eace Sommerfest</h4>
    <p>Maj 04, 2022</p>
    <hr>
    <h4>NEXT GENERATION MERCH</h4>
    <p>December 17, 2021</p>
    <hr>
    <h4>EN LILLE HJÆLP I JULEDAGENE</h4>
    <p>December 07, 2021</p>
    <hr>
  </div>
  <div class="forside_hand">
    <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/hand_pakke-1.png" alt="">
  </div>
  </div>
</section>
<section id="sort_bar2">
	<h1>"WHEN YOU NEED TO <strong class="level">LEVEL</strong> UP"</h1>
</section>

<section id="forside_some"><div class="some_text"><h2>FØLG OS PÅ SOCIALE MEDIER</h2>
     <button>@eace_gum</button></div>
    <div class="some">
     
    </div>
    
    
</section>
</main>

<script>

	/* konfigurer nedestående variabler efter behov */
	//antallet af produkter som er vist på splashbilledet
	const maxProductsIndex = 3;
	/* ^------------------------------------------^ */

	//laver en array af elementer med klassen .product
	const products = document.querySelectorAll(".product");

	//bladre frem knap
	document.querySelector(".next").addEventListener("click", () => {
		products.forEach((product) => {
			//hvis data-index værdien er lig med eller mindre end 1
			if (product.dataset.index <= 1) {
				//sæt data-index værdien til antallet af produkter
				product.dataset.index = maxProductsIndex;
			} else {
				//ellers træk 1 fra data-index værdien
				product.dataset.index--;
			}
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
		});
	});

</script>

<?php get_footer(); ?>