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
  #produkter {
    display: grid:
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    gap: 80px 60px;
  }

  .produkt-card {
    aspect-ratio: 8 / 5;
    width: 100%;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 1px 3px 64px rgba(0, 0, 0, 4)
  }

  .produkt-image {
    aspect-ratio: 1 / 1;
    width: 100%;
  }

  .bottom-row {
    padding: 0px 8px 12px 8px;
    text-align: center;
  }

  .produkt-navn {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 1.5rem;
  }

  .produkt-slogan {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 1.25rem;
  }

  .produkt-beskrivelse {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 0.875rem;
  }

  .pris {
    color: var(--black);
    font-family: "NormsBold";
    font-size: 1.5rem;
    margin-block: 32px
  }

  .bottom-row button {
    margin-inline: auto;
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
    opacity: 0.9;
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

  <section id="filter-menu">

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
    const mainContent = document.getElementById("main-content");
    const template = document.querySelector("template").content;
    mainContent.textContent = ""; //fjerner sektionens indhold

    produkter.forEach((produkt) => {
      if (filter == "alle" || filter == produkt.kategori) {
        //hvis objektet har samme værdi som filterknappen
        const clone = template.cloneNode(true);
        clone.querySelector(".produkt-image").style.backgroundImage = `url(${produkt.billede.guid})`;
        clone.querySelector(".produkt-navn").textContent = `${produkt.title.rendered}`;
        clone.querySelector(".produkt-beskrivelse").textContent = `${produkt.beskrivelsekort}`;
        clone.querySelector(".pris").textContent = `${produkt.pris}`;
        clone.querySelector("article").addEventListener("click", () => location.href = `${produkt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
        mainContent.appendChild(clone);
      }
    });
  }
</script>

<?php get_footer(); ?>
