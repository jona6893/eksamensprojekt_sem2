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
:root {
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


.filter-menu {
    --repeat: auto-fit;
}

@media (min-width: 805px) {
    #filter-menu {
        --repeat: 4;
    }
}

#filter-menu {
    gap: 10px;
    display: grid;
    grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
}

.filter-btn {
    color: var(--blaa);
    border: 1px var(--blaa) solid;
    background-color: transparent;
    padding: 8px 12px;
    width: 160px;
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
    display: flex;
    /*  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); */
    flex-direction: column
}


.produkt-card {
    display: grid;
    border-top: solid 3px grey;
    gap: 20px;
    grid-template-columns: 1fr 2fr 1fr;
    grid-template-rows: 200px;

}


/*   @media (max-width: 730px) {
    #produkter {
      grid-template-columns: repeat(var(--viste-produkter), minmax(320px, 1fr));
      gap: 10px;
      overflow-x: scroll;
    }

    .produkt-card {
      box-shadow: 1px 3px 32px rgba(0, 0, 0, 0.04);
      display: flex;

    }
  } */

.produkt-navn {
    color: var(--black);
    font-family: "NormsRegular";
    font-size: 1.5rem !important;
    margin-bottom: 4px;
}

@media (max-width: 570px) {}

.abo-img {
    position: relative;
    aspect-ratio: 738 /1417;

    background-size: cover;
    height: 100%;
}

.add-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 5%;
}


.add-container button {
    width: 25px;
    height: 25px;
    background-color: white;
    border: none;
}

.minus {
    color: red;
}

.minus:hover {
    background-color: red;
    color: white;
}

.plus {
    color: green;
}

.plus:hover {
    background-color: green;
    color: white;
}

.add-tal {
    padding-inline: 3px;
}

.add-grid-container {
    display: flex;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    height: 25px;

}
</style>

<main id="main-content">

    <template>
        <article class="produkt-card">
            <div class="abo-img">
            </div>
            <div>
                <p class="produkt-info"></p>
                <button class="read-more">LÆS MERE OM PRODUKTET</button>
            </div>

            <div class="add-container">
                <div class="add-grid-container">
                    <button class="minus">-</button>
                    <p class="add-tal">0</p>
                    <button class="plus">+</button>
                </div>
            </div>
        </article>
    </template>

    <section id="splash-image">
        <h1>Abonnement</h1>
        <P>Få 12 pakker tyggegummi til 199kr efter eget valg leveret
            i din postkasse hver måned eller hver anden måned.</P>
    </section>
    <!-- knapper til filtrering -->
    <section id="filter-menu" class="max-width">
        <button class="filter-btn selected" data-category="alle">ALLE</button>
        <button class="filter-btn" data-category="tyggegummi">VITAMIN BOOST</button>
        <button class="filter-btn" data-category="merchandise">HEALTHY TEETH</button>
        <button class="filter-btn" data-category="merchandise">ENERGY BOOST</button>
        <button class="filter-btn" data-category="merchandise">DEFENCE BOOST</button>
        <button class="filter-btn" data-category="merchandise">FOCUS</button>
        <button class="filter-btn" data-category="merchandise">RELAX</button>
        <button class="filter-btn" data-category="merchandise">COLLAGEN BOOST</button>
    </section>

    <section id="produkter" class="max-width"></section>


</main>

<script>
const url = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-json/wp/v2/abonnement"; //wp-json

let produkter; //json databasen
let filter = "alle"; //variabel som ændrer sig alt efter hvilken filterknap du klikker på


document.addEventListener("DOMContentLoaded", () => {
    //venter indtil siden er loadet før knapperne bliver funktionelle
    const filterButtons = document.querySelectorAll(".filter-btn");
    filterButtons.forEach((button) => {
        button.addEventListener("click",
            filterProdukter); //knapperne kalder på filterProdukter() funktionen, når man klikker
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

    produkter.forEach((abonnement) => {
        if (filter == "alle" || filter == abonnement.kategori) {
            //hvis objektet har samme værdi som filterknappen
            const clone = template.cloneNode(true);
            clone.querySelector(".abo-img").style.backgroundImage = `url(${abonnement.produkt_foto.guid})`;
            clone.querySelector(".produkt-info").textContent = `${abonnement.produkt_info}`;
            //clone.querySelector("article").addEventListener("click", () => location.href = `${produkt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
            mainContent.appendChild(clone);
            visteProdukter = document.getElementById("produkter").childElementCount;
        }
    });
    document.querySelector(":root").style.setProperty("--viste-produkter", visteProdukter);

    /* ---------- Her start tæller funktionen. ---------- */

    //De her variabler taget fat i all de elementer der har den valgte class. Da der er mere end en, indeholder hver variable en Array.
    let minus = document.querySelectorAll(".minus")
    let plus = document.querySelectorAll(".plus")
    let tal = document.querySelectorAll(".add-tal")


    tilføjTal(minus, plus, tal);
}

function tilføjTal(minus, plus, tal) {
    //opretter en tomt Array som vi senere fylder med 0 taller
    let counter = []

    console.log(minus, plus, tal)
    // en foreach function der skubber et 0 tal ind i "counter" for hvert element der er i tal variablen. 
    // så hvis der er 7 elementer så bliver der skubbet et 0 tal ind counter array'en så der er sådan ud: counter = [0,0,0,0,0,0,0]
    tal.forEach(e => {
        counter.push(0)
    })

    console.log(counter)
    // for hvert plus tegn, sætter vi en eventlistener på. "e" står for hvert element i plus variablen. "i" står for index.
    // hvert element i en array har et index.
    plus.forEach((e, i) => {
        e.addEventListener("click", () => {
            // tilføjer et til det objekt i counter der er = "i", altså dens index number.
            counter[i]++
            // bruger textCentent til at sætte det ind i html, på den måde ændres værdien på siden. "${}" bruger til at lave en integer om til en string.
            // integer er et number i JS, string er tekst. tekst i JS kan også en holde tal, men så er det stadig en string og ikke en integer.
            tal[i].textContent = `${counter[i]}`;
        })
    })

    // denne forEach funktion gør det samme som for oven, den fjerner bare et tal med "counter--" i stedet for "counter++"
    minus.forEach((e, i) => {
        e.addEventListener("click", () => {
            counter[i]--
            tal[i].textContent = `${counter[i]}`;
        })
    })


}
</script>


<?php get_footer(); ?>