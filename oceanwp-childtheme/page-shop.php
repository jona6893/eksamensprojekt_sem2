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
  :root{
    --viste-produkter: 6;
  }

  #splash-image {
    position: relative;
    background-color: #D8F5F6;
    background-size: cover;
    height: 70vh;
    margin-bottom: 80px;
  }

  #splash-image::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/Alle-3-web-.webp");
    background-position: center;
    opacity: 0.15;
  }

  #splash-image h1 {
    position: absolute;
    bottom: 5vh;
    left: 0;
    right: 0;
    text-align: center;
    font-family: "NormsRegular";
    font-size: 4rem;
  }

  #filter-menu {
    display: flex;
    justify-content: space-between;
    max-width: 400px;
  }
  
  .filter-btn {
    color: var(--blaa);
    border: 1px var(--blaa) solid;
    background-color: transparent;
    padding: 8px 12px;
    width: 110px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 0.875rem;
    font-family: "NormsRegular";
    transition: color 0.2s, background-color 0.2s;
  }

  .filter-btn.selected {
    color: var(--lyse-blaa);
    background-color: var(--blaa);
  }

  #produkter {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 60px 40px;
    margin-block: 20px 80px;
    padding: 32px 16px;
  }

  .produkt-card {
    aspect-ratio: 1 / 2;
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

  @media (max-width: 730px) {
    #produkter {
      grid-template-columns: repeat(var(--viste-produkter), minmax(320px, 1fr));
      gap: 10px;
      overflow-x: scroll;
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
    font-family: "NormsRegular";
    font-size: 1.5rem !important;
    margin-bottom: 4px;
  }

  .produkt-slogan {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 1.25rem !important;
    margin-bottom: 8px;
  }

  .produkt-beskrivelse {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 0.75rem !important;
    margin-bottom: 2px;
    padding-inline: 16px;
  }

  .pris {
    color: var(--black);
    font-family: "NormsBold";
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
    font-family: "NormsRegular";
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
  }

  #testimonial {
    display: flex;
    justify-content: space-between;
    gap: 40px;
    overflow-x: scroll;
    padding-inline: 24px;
    margin-block: 40px;
  }

  .testimonial-container {
    display: grid;
    grid-template-rows: 1fr auto 1fr;
    gap: 16px;
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
    <h1>Produkter</h1>
</section>

  <section id="filter-menu" class="max-width">
    <button class="filter-btn selected" data-category="alle">Alle</button>
    <button class="filter-btn" data-category="tyggegummi">Tyggegummi</button>
    <button class="filter-btn" data-category="merchandise">Merchandise</button>
  </section>

  <section id="produkter" class="max-width"></section>

  <section id="features" class="max-width">
    <figure id="mint">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_mint.svg">
      <caption>Frisk & langvarig mint smag</caption>
    </figure>
    <figure id="dk">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_dk.svg">
      <caption>Udviklet & produceret i Danmark</caption>
    </figure>
    <figure id="levering">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_levering.svg">
      <caption>Effektiv levering</caption>
    </figure>
    <figure id="sukkerfrit">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/ikon_sukkerfrit.svg">
      <caption>Sukkerfrit tyggegummi</caption>
    </figure>
  </section>

  <section id="testimonial" class="max-width">
    <article class="testimonial-container">

    </article>
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

<?php get_footer(); ?>
