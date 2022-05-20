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
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 60px 40px;
    margin-block: 80px;
  }

  .produkt-card {
    aspect-ratio: 8 / 13;
    width: 100%;
    display: grid;
    grid-template-rows: 8fr 5fr;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 1px 3px 64px rgba(0, 0, 0, 0.04);
    overflow: hidden;
  }

  .produkt-image {
    aspect-ratio: 1 / 1;
    width: 100%;
    background-size: contain;
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
    margin-bottom: 2px;
  }

  .produkt-beskrivelse {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 0.875rem !important;
    margin-bottom: 2px;
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
</style>

<main id="main-content">

  <template>
    <article class="produkt-card">
      <div class="top-row produkt-image"></div>
      <div class="bottom-row">
        <h2 class="produkt-navn"></h2>
        <h3 class="produkt-slogan"></h3>
        <p class="produkt-beskrivelse"></p>
        <p class="pris"></p>
        <button>FØJ TIL KURV</button>
      </div>
    </article>
  </template>

  <section id="filter-menu" class="max-width">
    <button class="filter-btn selected" data-category="alle">Alle</button>
    <button class="filter-btn" data-category="tyggegummi">Tyggegummi</button>
    <button class="filter-btn" data-category="merchandise">Merchandise</button>
  </section>
  <section id="produkter" class="max-width"></section>
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
    mainContent.textContent = ""; //fjerner sektionens indhold

    produkter.forEach((produkt) => {
      if (filter == "alle" || filter == produkt.kategori) {
        //hvis objektet har samme værdi som filterknappen
        const clone = template.cloneNode(true);
        clone.querySelector(".produkt-image").style.backgroundImage = `url(${produkt.billede.guid})`;
        clone.querySelector(".produkt-navn").textContent = `${produkt.title.rendered}`;
        clone.querySelector(".produkt-slogan").textContent = `${produkt.slogan}`;
        clone.querySelector(".produkt-beskrivelse").textContent = `${produkt.beskrivelsekort}`;
        clone.querySelector(".pris").textContent = `${produkt.pris}`;
        //clone.querySelector("article").addEventListener("click", () => location.href = `${produkt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
        mainContent.appendChild(clone);
      }
    });
  }
</script>

<?php get_footer(); ?>
