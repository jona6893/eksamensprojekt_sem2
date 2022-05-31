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
    background-color: black;
  }
/*------------- første sektion ------------*/
   #first_section{
        display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding: 5%;
      }
  
      .laeseom {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 336px));
        width: 100%;
        justify-items: start;
        justify-items: stretch;
        align-items: center;
        justify-content: center;
        padding-right: 15%; 
      }
      
      .laeseom-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        width: 80%;
        display: grid;
        justify-items: start;
        gap: 1px;
        padding: 7% 3%;
        min-height: 100%;
      }
      .h2laes {
        font-family: "sofia-pro", sans-serif !important;
        font-weight: 700;
        font-style: normal;
        font-size: clamp(1rem, 0.8rem + 0.5vw, 2.5rem);
        }

      .kategorier-felter{
        display: grid;
        gap: 38px;
        width:100%;
      }
      input{
        padding:2%;
        border: none;
        border-bottom: solid darkgrey 1px;
      }
      .image-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 1fr);
    width: 143%;
    grid-gap: 0.5rem;
      }


    .grid1{
      grid-column: 1/2;
      grid-row: 1/2;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid2{
      grid-column: 2/3;
      grid-row: 1/2;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid3{
      grid-column: 3/4;
      grid-row: 1/2;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid4{
      grid-column: 1/2;
      grid-row: 2/3;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid5{
      grid-column: 2/3;
      grid-row: 2/3;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid6{
      grid-column: 3/4;
      grid-row: 2/3;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid7{
      grid-column: 1/2;
      grid-row: 3/4;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid8{
      grid-column: 2/3;
      grid-row: 3/4;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
    .grid9{
      grid-column: 3/4;
      grid-row: 3/4;
      box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
    }
/*------------- anden sektion ------------*/
#second_section {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-right: 15%;
        padding-left: 15%;
        padding-bottom: 4%;
        padding-top: 4%;
}

/*------------- tredje sektion ------------*/
#third_section {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-right: 15%;
        padding-left: 15%;
        padding-bottom: 4%;
}
/*------------- fourth sektion ------------*/
#fourth_section {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-right: 15%;
        padding-left: 15%;
        padding-bottom: 4%;
}
#blogbillede{
  width: 63%;
  padding-bottom: 5%; 
}


/*------------- overordnet styling af knapper, lilletekst og container med shadow sektion ------------*/
.blogpost-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        width: 100%;
        height: auto;
        display: grid;
        justify-items: start;
        padding: 8% 8%;
        min-height: 360px;
      }
.knapper {
        background-color: black;
        color: white;
        border: none;
        width: 150px;
        height: 40px;
      }
.lilletekstogknap{
  display: flex;
  justify-content: space-between;
    align-content: space-between;
    flex-wrap: nowrap;
    flex-direction: row;
    width: 100%;
}
.lilletekst{
  font-family: "Helvetica", sans-serif !important;
    font-weight: normal;
    font-size: 1rem;
    font-size: clamp(0rem, 0.5rem + 0.25vw, 1.25rem);
}
#sort_bar1{
		background-color:black;
    height: 203px;
		display: grid;
		align-items: center;
    justify-items: center;
	}
	#sort_bar1 h1{
    font-family: "adrianna", sans-serif;
		font-size: 5rem;
    font-weight: 800;
  font-style: normal;
		color:white;
		
	}
 
  


</style>

<main id="main-content">

<section id="first_section">
<h1>Eace Blog</h1>
    <div class="laeseom">
    <div class="laeseom-container">
      <h2 class="h2laes">Hvad vil du læse om?</h2>
      <div class="kategorier-felter">
       <a href="">MERCH</a>
       <a href="">EACE GUM</a>
       <a href="">TYGGEGUMMI</a>
       <a href="">SAMARBEJDE</a>
       <a href="">SUSTAINABLE</a>
       <a href="">EACE EVENTS</a>
      </div>
    </div>
    <div class="image-container">
<img class="grid1" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid1.png?_t=1653994813" alt="grid1">
<img class="grid2" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid2.png?_t=1653994776" alt="grid2">
<img class="grid3" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid3.png?_t=1653994776" alt="grid3">
<img class="grid4" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid4.png?_t=1653994776" alt="grid4">
<img class="grid5" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid5.png?_t=1653994776" alt="grid5">
<img class="grid6" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid6.png?_t=1653994776" alt="grid6">
<img class="grid7" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid7.png?_t=1653994776" alt="grid7">
<img class="grid8" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid8.png?_t=1653994776" alt="grid8">
<img class="grid9" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/grid9.png?_t=1653994776" alt="grid9">
  </div>
    </div>
  </section>

  <section id="sort_bar1">
	<h1>PUT YOUR MIND AT EACE</h1>

</section>

  <section id="second_section">
    <h1>Blog indlæg</h1>
    <div class="blogpost1">
    <div class="blogpost-container">
      <h2>ALT OM ENERGY BOOST</h2>
     <p>Energy Boost var det andet produkt Eace Gum lancerede. Det kom ud i december 2021, lidt over et år efter Vitamin Boost landede i butikkerne. Det er på rekordtid blevet et meget populært tyggegummi og ligger i butikkerne landet over. Her på siden kan du læse alt der er værd at vide om Energy Boost!  Idéen til Energy Boost…</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> maj 12, 2022 <br> 0 kommentarer</p>
    <div class="knapper">
        <button class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section id="third_section">
    <div class="blogpost2">
    <div class="blogpost-container">
      <h2>Eace Sommerfest</h2>
     <p>Eace Gum inviterer til årets første og fedeste sommerfest! Vi skyder sommeren igang, fejrer at vi igen kan mødes under normale omstændigheder og byder på en aften med live musik, events, festlig stemning under åben himmel, mad og kolde drinks samt dj til langt ud på natten.</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> maj 04, 2022 <br> 0 kommentarer</p>
    <div class="knapper">
        <button class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section id="fourth_section">
    <div class="blogpost3">
    <div class="blogpost-container">
      <h2>NEXT GENERATION MERCH</h2>
      <img id="blogbillede" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/blogbillede.webp?_t=1653902197" alt="blogbillede">
      <p>Vi er next generation chewing gum. Nu har vi lavet next generation merch. I samarbejde med Neutral har vi lavet en bæredygtigt merch kollektion i høj kvalitet. Læs meget mere om vores merch kollektion i dette blogindlæg.</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> december 17, 2021<br> 0 kommentarer</p>
    <div class="knapper">
        <button class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  
</script>

<?php get_footer(); ?>
