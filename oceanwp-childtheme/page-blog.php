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
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/streger2.png");
    background-size: cover;
  }
/*-------------------MOBIL---------------------*/
#first_section{
        padding: 5%;
      }
  
      .laeseom {
        padding-right: 15%; 
      }
      
      .laeseom-container {
        padding-bottom: 5%;
      }

      .kategorier-felter{
        display: grid;
        gap: 12px;
      }
      input{
        padding:2%;
        border: none;
        border-bottom: solid darkgrey 1px;
      }
      .image-container {
    display: grid;
    width: 117%;
     gap: 5px;
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
/*------------- anden, tredje og fjerde sektion ------------*/
#second_section, #third_section, #fourth_section  {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-right: 7%;
        padding-left: 7%;
        padding-bottom: 4%;
        padding-top: 4%;
}
#blogbillede{
  width: 100%;
  padding-bottom: 5%; 
}


/*------------- overordnet styling af knapper, lilletekst og container med shadow sektion ------------*/
.blogpost-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        padding: 8% 8%;
      }
.knapper {
        background-color: black;
        color: white;
        border: none;
        width: 150px;
        height: 40px;
      }
.lilletekstogknap{
  padding-top: 5%;
  padding-bottom: 5%;
}

.lilletekst{
    font-size: clamp(0rem, 0.5rem + 0.25vw, 1.25rem);
}
#sort_bar1{
		background-color:black;
    height: 203px;
		display: grid;
		align-items: center;
    justify-items: center;

	}
	#sort_bar1 h2{
    font-family: "adrianna", sans-serif;
		font-size: 5rem;
    font-weight: 800;
  font-style: normal;
		color:white;
    font-size: clamp(3rem, 2.6rem + 2vw, 5rem);
    text-align: center;
	}

/*-------------------DESKTOP---------------------*/
  @media (min-width: 800px){
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
        padding-bottom: 4%;
        padding-top: 4%;
}
.grid{
  display: grid;
  grid-template-columns: 1fr 2fr;
  grid-template-rows: 1fr;
}


/*------------- tredje sektion ------------*/
#third_section {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-bottom: 4%;
}
/*------------- fourth sektion ------------*/
#fourth_section {
  display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding-bottom: 4%;
}
#blogbillede{
  width: 100%;
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
.tekstogknap{
  display: grid;
    width: 100%;
    align-content: space-evenly;
    padding-left: 5%;
}
.lilletekst{
  font-family: "Helvetica", sans-serif !important;
    font-weight: normal;
    font-size: 1rem;
    font-size: clamp(0rem, 0.5rem + 0.25vw, 1.25rem);
    line-height: 1rem;
}
/* -------------------- DEn SORTE BAR -------------------- */
#sort_bar1{
		background-color: var(--sort);
		height: 300px;
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

  .eace {
    font-family: "adrianna", sans-serif;
    font-weight: 800;
    font-style: normal;
    color: #A2D8E5;
  }

  #sort_bar1{
    background-size: contain;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position-y: 50%;
  }

  #sort_bar1{
  background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/blogbar.svg")
}
}
  


</style>

<main id="main-content">

<section id="first_section" class="max-width">
<h1>EACE BLOG</h1>
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
	<h2>PUT YOUR MIND AT<strong class="eace"> EACE</strong> </h2>

</section>

  <section id="second_section" class="max-width">
    <h2>Blog indlæg</h2>
    <div class="blogpost1">
    <div class="blogpost-container">
      <div class="grid">
      <img id="blogbillede" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/2021_EACE_WEB_032.png?_t=1654080646" alt="blogbillede1">
      <div class="tekstogknap">
      <h3>ALT OM ENERGY BOOST</h3>
     <p>Energy Boost var det andet produkt Eace Gum lancerede. Det kom ud i december 2021, lidt over et år efter Vitamin Boost landede i butikkerne. Det er på rekordtid blevet et meget populært tyggegummi og ligger i butikkerne landet over. Her på siden kan du læse alt der er værd at vide om Energy Boost!  Idéen til Energy Boost…</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> maj 12, 2022 <br> 0 kommentarer</p>
    <div class="knapper">
        <button onclick="window.location.href='https://eacegum.com/blogs/blogindlaeg/alt-om-energy-boost';" class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
        </div>
     </div>
      </div>
    </div>
  </section>

  <section id="third_section" class="max-width">
    <div class="blogpost2">
    <div class="blogpost-container">
      <div class="grid">
      <img id="blogbillede" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/2021_EACE_WEB_051.png?_t=1654080646" alt="blogbillede2">
     <div class="tekstogknap">
     <h3>Eace Sommerfest</h3>
      <p>Eace Gum inviterer til årets første og fedeste sommerfest! Vi skyder sommeren igang, fejrer at vi igen kan mødes under normale omstændigheder og byder på en aften med live musik, events, festlig stemning under åben himmel, mad og kolde drinks samt dj til langt ud på natten.</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> maj 04, 2022 <br> 0 kommentarer</p>
    <div class="knapper">
        <button onclick="window.location.href='https://eacegum.com/blogs/blogindlaeg/eace-sommerfest';" class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>

  <section id="fourth_section" class="max-width">
    <div class="blogpost3">
    <div class="blogpost-container">
      <div class="grid">
      <img id="blogbillede" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/2021_EACE_WEB_046.png?_t=1654080646" alt="blogbillede3">
      <div class="tekstogknap">
      <h3>NEXT GENERATION MERCH</h3>
      <p>Vi er next generation chewing gum. Nu har vi lavet next generation merch. I samarbejde med Neutral har vi lavet en bæredygtigt merch kollektion i høj kvalitet. Læs meget mere om vores merch kollektion i dette blogindlæg.</p>
     <div class="lilletekstogknap">
     <p class="lilletekst">Shopify API <br> december 17, 2021<br> 0 kommentarer</p>
    <div class="knapper">
        <button onclick="window.location.href='https://eacegum.com/blogs/blogindlaeg/next-generation-merch';" class="knapper knap1">LÆS MERE</button>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
</main>

<script>
  
</script>

<?php get_footer(); ?>
