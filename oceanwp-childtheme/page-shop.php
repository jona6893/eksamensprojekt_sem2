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
  /* variabel brugt til horisontal scroll som reference tal*/
  :root{
    --viste-produkter: 6;
  }
  body {
    background-color: #FFFDFC;
  }

  #splash-image {
    position: relative;
    background-size: cover;
    height: 65vh;
    margin-bottom: 80px;
  }

  #splash-image::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/pernille_splash2.png");
    background-size: cover;
    background-color: var(--lyse-blaa);
  }

  #splash-image h1 {
    position: absolute;
    bottom: 30vh;
    left: 20%;
    font-weight: 800;
    font-size: clamp(2.338rem, calc( 12px + 3.025vw ), 3.163rem);
   
  }
  #splash-image p {
  position: absolute;
    bottom: 20vh;
    left: 20%;
    font-size: 1rem;
    max-width: 40ch
    
 }

  #filter-menu {
    gap:30px;
    display: flex;
    justify-content: space-between;
    max-width: 500px;

  }
  
  .filter-btn {
    color: white;
   /*  border: 1px var(--sort) solid; */
    background-color: var(--sort);
    padding: 8px 12px;
    width: 160px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 0.875rem;
    transition: color 0.2s, background-color 0.2s;
    border:none;
    
  }
  .filter-btn:hover{
    color: var(--sort);
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border:none;
  }

  .filter-btn.selected {
    color: var(--sort);
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border:none;
    
  }

  #produkter {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 60px 40px;
    margin-block: 20px 80px;
    padding: 32px 16px;
  }

  .produkt-card {
    aspect-ratio: 7 / 13;
    width: 100%;
    display: grid;
    grid-template-rows: 6fr 8fr;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 1px 3px 64px rgba(0, 0, 0, 0.04);
    overflow: hidden;
    transition: background-color 0.3s;
  }

  .produkt-card:hover {
    background-color: #f0f0f0;
  }

  /* laver grid om til en horisontal scroll på mobil */
  @media (max-width: 730px) {
    #produkter {
      grid-template-columns: repeat(var(--viste-produkter), minmax(320px, 1fr));
      gap: 10px;
      overflow-x: scroll;
      
    }

    .produkt-card {
      box-shadow: 1px 3px 32px rgba(0, 0, 0, 0.04);
    }
    .produkt-card {
      box-shadow: 1px 3px 32px rgba(0, 0, 0, 0.04);
    }
  }

  .produkt-image, .produkt-hoverimage {
    position: relative;
    aspect-ratio: 8 / 7;
    width: 100%;
    background-size: cover;
  }

  .produkt-hoverimage {
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .produkt-card:hover .produkt-hoverimage {
    opacity: 1;
  }

  .bottom-row {
    padding: 0px 8px 20px 8px;
    text-align: center;
  }

  .produkt-navn {
    color: var(--black);
    
    font-size: 1.5rem !important;
    margin-bottom: 4px;
  }

  .produkt-slogan {
    color: var(--black);
    
    font-size: 1.25rem !important;
    margin-bottom: 8px;
  }

  .produkt-beskrivelse {
    color: var(--black);
    
    font-size: 0.75rem !important;
    margin-bottom: 2px;
    padding-inline: 16px;
  }

  .pris {
    color: var(--black);
    
    font-size: 1.5rem;
    position: absolute;
    bottom: 56px;
    left: 50%;
    transform: translateX(-50%);
  }

  .bottom-row {
    height: 100%;
    position: relative;
  }

  .bottom-row button {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: var(--sort);
    color: white;
    border: none;
    padding: 14px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 0.875rem;
    
    transition: opacity 0.3s;
  }

  .bottom-row button:hover {
    opacity: 0.8;
  }

  #features {
    display: flex;
    justify-content: space-around;
    gap: 40px;
    flex-wrap: wrap;
    padding-inline: 24px;
    margin-block: 40px;
    max-width: 600px;
  }

  @media (max-width: 570px) {
    #features {
      gap: 100px;
      padding-inline: 40px;
    }
  }

  #features figure {
    width: 96px;
  }

  figure {
    text-align: center;
    display: grid;
    grid-template-rows: 1fr 1fr;
    gap: 8px;
  }

  figure img {
    place-self: end;
    aspect-ratio: 1 / 1;
    width: 80%;
  }

  #testimonial {
    position: relative;
    padding-inline: 24px;
    margin-block: 40px;
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

  [data-index="1"] {
    left: -20%;
    opacity: 0;
  }

  [data-index="2"] {
    left: 15%;
    opacity: 1;
  }

  [data-index="3"] {
    left: 50%;
    opacity: 1;
  }

  [data-index="4"] {
    left: 85%;
    opacity: 1;
  }

  [data-index="5"] {
    left: 120%;
    opacity: 0;
  }

  /* viser 1 i stedet for 3 på mobil */
  @media (max-width: 678px) {
    .testimonial-container {
      width: 80%;
    }

    [data-index="1"], [data-index="2"] {
      left: -50%;
      opacity: 0;
    }

    [data-index="3"] {
      left: 50%;
      opacity: 1;
    }

    [data-index="4"], [data-index="5"] {
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
    top: 50%;
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

  .previous {
    left: 8px;
    transform: translateX(-6px);
  }

  .next {
    right: 8px;
    transform: translateX(6px);
  }

  /* rykker knapperne lidt ud til siderne så de ikke er ovenpå teksten */
  @media (min-width: 1200px) {
      .previous {
      left: -12px;
    }

    .next {
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
</style>

<main id="main-content">

  <template>
    <article class="produkt-card">
      <div class="top-row produkt-image">
        <div class="produkt-hoverimage"></div>
      </div>
      <div class="bottom-row">
        <h2 class="produkt-navn"></h2>
        <h3 class="produkt-slogan"></h3>
        <p class="produkt-beskrivelse"></p>
        <p class="pris"></p>
        <button>FØJ TIL KURV</button>
      </div>
    </article>
  </template>

  <section id="splash-image">
    <h1>SHOP</h1>
    <p>Shop vores forskellige varianter af tyggegummi og Eace merchandise af økologisk bomuld</p>
</section>

  <section id="filter-menu" class="max-width">
    <button class="filter-btn selected" data-category="alle">Alle</button>
    <button class="filter-btn" data-category="tyggegummi">TYGGEGUMMI</button>
    <button class="filter-btn" data-category="merchandise">MERCHANDISE</button>
  </section>

  <section id="features" class="max-width">
    <figure id="mint">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_mint_sort.svg">
      <caption>Frisk & langvarig mint smag</caption>
    </figure>
    <figure id="dk">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_dk_sort.svg">
      <caption>Udviklet & produceret i Danmark</caption>
    </figure>
    <figure id="levering">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_levering_sort.svg">
      <caption>Effektiv levering</caption>
    </figure>
    <figure id="sukkerfrit">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_sukkerfrit_sort.svg">
      <caption>Sukkerfrit tyggegummi</caption>
    </figure>
  </section>

  <section id="produkter" class="max-width"></section>

  <section id="testimonial" class="max-width">
    <article class="testimonial-container" data-index="1">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Lækkert tyggegummi med dejlig frisk smag! Kan varmt anbefales som supplement til den daglige kost."</i></p>
      <p class="quote_author"><b>Rasmus</b></p>
    </article>
    <article class="testimonial-container" data-index="2">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Når jeg alligevel tygger tyggegummi, så er det perfekt at jeg kan få mine vitaminer samtidigt"</i></p>
      <p class="quote_author"><b>Philip</b></p>
    </article>
    <article class="testimonial-container" data-index="3">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Fantastisk vitamintyggegummi som jeg helt sikkert kan anbefale. Herudover er der ekstraordinær god service ved bestilling. Helt klart 5 stjerner!"</i></p>
      <p class="quote_author"><b>Mikael</b></p>
    </article>
    <article class="testimonial-container" data-index="4">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Mega let måde at få mine vitaminer over den mørke vinter. Der udover giver den dig god mint-ånde."</i></p>
      <p class="quote_author"><b>Søren</b></p>
    </article>
    <article class="testimonial-container" data-index="5">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/5_stars.svg" alt="5 stjerner">
      <p class="quote"><i>"Skøn smag og en nem måde at få sine vitaminer. Får tilsendt en pakke månedligt og har aldrig haft nogen problemer."</i></p>
      <p class="quote_author"><b>Josefine</b></p>
    </article>
    <button class="carousel-btn previous">←</button>
    <button class="carousel-btn next">→</button>
  </section>

</main>

<script>
  const url = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-json/wp/v2/produkt"; //wp-json

  let produkter; //json databasen
  let filter = "alle"; //variabel som ændrer sig alt efter hvilken filterknap du klikker på

  document.addEventListener("DOMContentLoaded", () => {
    //venter indtil siden er loadet før knapperne bliver funktionelle
    const filterButtons = document.querySelectorAll(".filter-btn");
    filterButtons.forEach((button) => {
      button.addEventListener("click", filterProdukter); //knapperne kalder på filterProdukter() funktionen, når man klikker
    }); 
    fetchData(); //kalder på fetchData() funktionen
  });

  async function fetchData() {
    //kaldes når siden er loadet
    let response = await fetch(url);
    produkter = await response.json();
    produkter.reverse();
    display(produkter); //kalder på display() funktionen med produkter som parameter
    //console.log(produkter);
  }

  function filterProdukter() {
    //bliver kaldt når knapperne klikkes på
    filter = this.dataset.category; //variablen ændres til den knap man klikker på
    document.querySelector(".selected").classList.remove("selected");
    this.classList.add("selected");

    display(); //kalder på display() funktionen
  }

  function display() {
    //kaldes når databasen er hentet eller når en filterknap klikkes
    const mainContent = document.getElementById("produkter");
    const template = document.querySelector("template").content;
    let visteProdukter;
    mainContent.textContent = ""; //fjerner sektionens indhold

    produkter.forEach((produkt) => {
      if (filter == "alle" || filter == produkt.kategori) {
        //hvis objektet har samme værdi som filterknappen
        const clone = template.cloneNode(true);
        clone.querySelector(".produkt-image").style.backgroundImage = `url(${produkt.billede.guid})`;
        clone.querySelector(".produkt-hoverimage").style.backgroundImage = `url(${produkt.hoverbillede.guid})`;
        clone.querySelector(".produkt-navn").textContent = `${produkt.title.rendered}`;
        clone.querySelector(".produkt-slogan").textContent = `${produkt.slogan}`;
        clone.querySelector(".produkt-beskrivelse").innerHTML = `${produkt.beskrivelsekort}`;
        clone.querySelector(".pris").textContent = `${produkt.pris}`;
        //clone.querySelector("article").addEventListener("click", () => location.href = `${produkt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
        mainContent.appendChild(clone);
        visteProdukter = document.getElementById("produkter").childElementCount;
      }
    });
    document.querySelector(":root").style.setProperty("--viste-produkter", visteProdukter);
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
  const next = document.querySelector(".next");
	next.addEventListener("click", () => {
    //hvis karrousellen IKKE har klassen .animating
    if (!carousel.classList.contains("animating")) {
      //tilføj klassen .animating og sætter knapperne på pause indtil animationen er færdig
      carousel.classList.add("animating")
      ratings.forEach((rating) => {
        //hvis data-index værdien er lig med eller mindre end 1
        if (rating.dataset.index <= 1) {
          //sæt data-index værdien til antallet af produkter
          rating.dataset.index = maxRatingsIndex;
        } else {
          //ellers træk 1 fra data-index værdien
          rating.dataset.index--;
        }
      });

      //fjerner klassen .animating når animationen er færdig efter 750ms og gør knapperne klikbart igen
      setTimeout(() => {
        carousel.classList.remove("animating")
      }, "750") //750 millisekunder

    }
	});

	//bladre tilbage knap
  const previous = document.querySelector(".previous");
	previous.addEventListener("click", () => {
    //hvis karrousellen IKKE har klassen .animating
    if (!carousel.classList.contains("animating")) {
      //tilføj klassen .animating og sætter knapperne på pause indtil animationen er færdig
      carousel.classList.add("animating")
      ratings.forEach((rating) => {
        //hvis data-index værdien er lig med eller større end antallet af produkter
        if (rating.dataset.index >= maxRatingsIndex) {
          //sæt data-index værdien til 1
          rating.dataset.index = 1;
        } else {
          //ellers læg 1 til data-index værdien
          rating.dataset.index++;
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
