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
  body {
    background-color: #FFFDFC;
  }
/* splashbillede */
  #splash-image {
    position: relative;
    background-size: cover;
    height: 65vh;
    margin-bottom: 80px;
    display: grid;
    justify-items:center;
    align-items:center;

  }
/*  */
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

  /* container til tekst på splash billede*/
  #splash-image div {
    position: absolute;
    top: 40%;
    left: clamp(24px, calc(30% - 280px), 400px);
    display: grid;
    gap: 20px;
  }

/* h1 på splashbilledet */
  #splash-image div h1 {
    font-weight: 800;
    font-size: clamp(2.338rem, calc( 4px + 3.025vw ), 3.163rem);
  }

 /* grid til teksten på splashbilledet */
  #splash-image div p {
    font-size: 1rem;
    max-width: 40ch
  }

/* ? */
  .filter-menu {
    --repeat: auto-fit;
  }
  /* media quuery til vores ccs variable, bruges på vores grid */
    @media (min-width: 805px) {
  #filter-menu {
    --repeat: 4;
  }
}
   #filter-menu {
    gap: 10px;
  display: grid;
    grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
    padding-bottom:60px;
    justify-items:center;
    justify-content:center;
    max-width:500px;
  }
  /* filtrerings knappers udseende */
  .filter-btn {
    color: white;
    background-color: var(--sort);
    padding: 8px 12px;
    width: 160px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 0.875rem;
    transition: color 0.2s, background-color 0.2s;
    border: none;
  }
  
  .filter-btn:hover{
    color: var(--sort);
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.06) 0px 3px 20px;
  }

  .filter-btn.selected {
    color: var(--sort);
    background-color: white;
    /* border: 1px var(--sort) solid; */
    box-shadow: rgba(0, 0, 0, 0.06) 0px 3px 20px;
  }


  /* ---------- Section2 ---------- */

  #section2{
    display: grid;
    grid-template-columns: repeat(var(--repeat, auto-fit), minmax(85px, 40px));
    justify-content: center;
    gap: 25px;
    padding-bottom: 25px;
  }
     @media (max-width: 475px) {
  #section2 {
    --repeat: 2;
  }
}

  #produkter {
    display: flex;
   flex-direction: column
  }


.produkt-card {
    display: grid;
    border-top: solid 1px grey;
    gap: 50px;
    grid-template-columns: 1fr 2fr 0.3fr;
    grid-template-rows: 0.1fr 0.1fr 0.1fr;
    padding: 25px;
    align-items: center;
    

}
.read-more {
    width: 100px;
    height: 40px;
}
 p{
  max-width:55ch;
}


  .produkt-navn {
    color: var(--black);
    font-size: 1.5rem !important;
    margin-bottom: 4px;
    grid-column: 2/3;
    grid-row: 1/2;
  }
  .produkt-info{
    grid-column: 2/3;
    grid-row: 2/3;
  }
  .read-more {
    grid-column: 2/3;
    grid-row: 3/4;
}
  .img-container{
    display: grid;
    grid-column: 1/2;
    width: 100%;
    grid-row: 1/4;
    height: 100%;
    justify-content: center;
    align-items: center;
    justify-items: center;
  }
  .abo-img{
    position: relative;
    aspect-ratio: 	566 / 1082;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    background-size: cover;
    grid-column: 1/2;
    /* background-position: 50%; */
    grid-row: 1/4;
    height: 80%;
    /* width: 100%; */
    justify-content: center;
  }
  
  .add-container {
    display: flex;
    justify-content: center;
    align-items: center;
    grid-column: 3/4;
    grid-row: 1/4;
}

.add-container button{
     width: 40px;
    height: 40px;
    background-color: white;
    border: none;
    padding: 0%;
  }
  .minus{
    color: red;
  }
  .minus:hover{
    background: red;
    color:white;
  }
  .plus{
    color: green;
  }
  .plus:hover{
    color: white;
    background: green;
  }
  .add-tal{
    display: grid;
    align-content: center;
    margin: 0%;
    padding-left:5px;
    padding-right:5px;

  }
.add-grid-container{
    display: flex;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    height: 100%;
}
/* drop-down menu til hyppighed */

/* knappens udseende */
.dropbtn {
  background-color: white;
  color: black;
  border: solid black 1px;
  cursor: pointer;
  text-align:end;
  width:181px;
}

/* .dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
} */

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  overflow: auto;
  z-index: 1;
  border:solid black 1px;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* .dropdown a:hover {background-color: #ddd;} */

.show {display: block;}

#grid-container-cart{
  display:grid;
  grid-template-columns: 2fr 1fr 1fr ;
  border-top:1px solid grey;
 
  padding-top:30px;
  padding-bottom:30px;
}
.box-3{
  display:grid;
  gap:120px;
}
.box-2{
  text-align:end;
  padding-right:8px;
}
.oversigt{
  display:grid;
  grid-template-columns:1fr 1fr; 

}
.total{

}
  
.next{
  width:120px;
}
.total-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.grid-container-cart h4{
  font:clamp(1.2rem, calc(12.25px + 0.925vw), 1.57rem);
}
/* .om-produktet{
  display:grid;
  grid-template-rows:2fr 1fr;
  justify-content:auto;
  gap:60px;
} */

/* --------- MOBILE UDGAVE --------- */

@media (max-width:600px) {

/*  #splash-image p {
    position: absolute;
    bottom: 20vh;
    left: 5%;
    font-size: 1rem;
}*/
    .produkt-card{
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr;
      gap:25px;
      padding: 15px;
    }
    .img-container {
    display: grid;
    grid-column: 1/2;
    width: 100%;
    grid-row: 1/3;
    height: 100%;
    justify-content: center;
    justify-items: center;
    align-items: center;
}
.abo-img {
    position: relative;
    aspect-ratio: 566 / 1082;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    background-size: cover;
    grid-column: 1/2;
    /* background-position: 50%; */
    grid-row: 1/4;
    height: 100%;
    /* width: 100%; */
    justify-content: center;
}
.add-grid-container {
    display: flex;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    height: 100%;
}
.add-container button {
    width: 40px;
    height: 40px;
    background-color: white;
    border: none;
    padding: 0%;
}
.read-more{
  height: 40px;
  width: 100px;
  grid-column: 2/3;
  grid-row: 3/4;
}
  .add-container{
    display: grid;
    justify-items: center;
    justify-content: center;
    align-items: center;
    grid-column: 1/2;
    grid-row: 3/4;
   
  }
  #grid-container-cart {
    display: grid;
    grid-template-columns: 1fr;
    justify-items: start;
    padding: 25px;
}
.oversigt {
    display: grid;
    grid-template-columns: 1fr;
}
  .total {
    grid-column: 1/2;
    grid-row: 8/9;
}
.box-3 {
    display: grid;
    gap: 25px;
}


}
  dialog {
    display: none;
    grid-template-columns: calc(260px + 10vw) 40vw;
    gap: 0 16px;
    /* padding: 64px 16px 16px 16px; */
    overflow-y: scroll;
    margin: auto;
    border: none;
  }

  dialog::backdrop {
    backdrop-filter: blur(8px);
    background-color: rgba(0, 0, 0, 0.4);
  }
/*kun synlig når den er åben*/
  dialog[open] {
    display: grid;
    animation-name: open-dialog;
    animation-duration: 0.6s;
    animation-fill-mode: both;
    animation-iteration-count: 1;
    animation-timing-function: cubic-bezier(0.4, 1.5, 0.6, 1);
  }

  .modal-image {
    width: 70%;
    aspect-ratio: 566 / 1082;
    background-size: cover;
    background-repeat: no-repeat;
    margin-inline: auto;
    position: sticky;
    top: 48px;

  }

  .left-column, .right-column {
    padding: 0 16px;
  }  

  @keyframes open-dialog {
    0%{
      transform: scale(0);
    }

    100%{
      transform: scale(1);
    }
  }

/*container til knappen (krydset)*/
  dialog form {
    position: sticky;
    top: 0;
    background-color: white;
    display: flex;
    flex-direction: row;
    grid-column: span 2;
  }
/*knappens (krydset) højte  */
  #close {
    height: 48px;
  }

/*modal/single view til mobil*/

@media (max-width: 768px) {
    dialog {
      grid-template-rows: 1fr auto;
      grid-template-columns: 1fr;
      gap: 16px
    }

    .modal-image {
    width: 30%;
    margin-inline:auto;
    position: static;
    }

    dialog form {
      grid-column: 1 / 2;
    }
  }

</style>
<!-- html begynder -->
<main id="main-content">

  <template>
    <article class="produkt-card">

      <div class="img-container">
        <div class="abo-img"></div >
    </div>
        <h3 class="produkt-navn"></h3>
        <p class="produkt-info"></p>
        <button class="read-more">LÆS MERE</button>
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
    
  <div>
    <h1>SKRÆDDERSY DIT ABONNEMENT</h1>
    <p class="abo-info">
      Få 12 pakker tyggegummi til 199kr efter eget valg leveret
      i din postkasse hver måned eller hver anden måned.
    </p>
  </div>

</section>
 <!-- knapper til filtrering -->
  <section id="filter-menu" class="max-width">
    <button class="filter-btn selected" data-kategori="alle">ALLE</button>
    <button class="filter-btn" data-kategori="vitamin_boost">VITAMIN BOOST</button>
    <button class="filter-btn" data-kategori="healthy_teeth">HEALTHY TEETH</button>
    <button class="filter-btn" data-kategori="energy_boost">ENERGY BOOST</button>
    <button class="filter-btn" data-kategori="defence_boost">DEFENCE BOOST</button>
    <button class="filter-btn" data-kategori="focus">FOCUS</button>
    <button class="filter-btn" data-kategori="relax">RELAX</button>
    <button class="filter-btn" data-kategori="collagen_boost">COLLAGEN BOOST</button>
  </section>
  <!-- <section id="section2" class="max-width">
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
  </section> -->
  <section id="produkter" class="max-width this-width"> </section>

<section id="add-cart" class="max-width">
  <div id="grid-container-cart">

    <div class="box-1">
    <h4>TILFØJET TIL DIT ABONNEMENT:</h4>
    <div class="oversigt">
      </div>
      <div class="total-container">
        <p class="total">PAKKER I ALT:</p>
      </div>
    </div>
    <div  class="box-2">
    <h4>VÆLG HYPPIGHED:</h4>
    </div>
    <div  class="box-3">
     
    <select name="cars" id="cars">
      <option value="hver måned">HVER MÅNED</option>
      <option value="hver anden måned">HVER ANDEN MÅNED</option>
    </select>
    <button onclick="window.location.href='https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/kurv/';" class="next"> GÅ TIL KURV</button>
    </div>
  </div> 

  <dialog id="modal">

    <form method="dialog">
      <button id="close">⨉</button>
    </form>

    <div class="left-column">
      <div class="modal-image"></div>
    </div>

    <div class="right-column">
      <h2 class="modal-navn"></h2>
      <h3 class="h3-info"></h3>
      <p class="modal-info"></p>
      <h3 class="h3-funktioner"></h3>
      <p class="modal-funktioner"></p>
      <h3 class="h3-anvendelse"></h3>
      <p class="modal-anvendelse"></p>
      <h3 class="h3-ingredienser"></h3>
      <p class="modal-ingredienser"></p>
    </div>
  </dialog>

</section>

</main>

<script>
  const url = "https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-json/wp/v2/abonnement"; //wp-json

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
    filter = this.dataset.kategori; //variablen ændres til den knap man klikker på
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
            clone.querySelector(".produkt-navn").textContent = `${abonnement.title.rendered}`;
            clone.querySelector(".produkt-info").textContent = `${abonnement.loop_beskrivelse}`;
            clone.querySelector(".read-more").addEventListener("click", () => modalView(abonnement)); //gør kortene klikbart og kalder på modalView med produkt som parameter
            mainContent.appendChild(clone);
            visteProdukter = document.getElementById("produkter").childElementCount;
        }
    });
    function modalView(abonnement) {
    const modal = document.querySelector("dialog");
    modal.querySelector(".modal-image").style.backgroundImage = `url(${abonnement.produkt_foto.guid})`;
    modal.querySelector(".modal-navn").textContent = `${abonnement.title.rendered}`;
    if (abonnement.info !== "") {//hvis produktet har en kort beskrivelse
      modal.querySelector(".h3-info").textContent = "Produkt info";
      modal.querySelector(".modal-info").innerHTML = `${abonnement.produkt_info}`;
    } else {
      modal.querySelector(".h3-info").textContent = "";
      modal.querySelector(".modal-info").innerHTML = "";
    }
    if (abonnement.funktioner !== "") {//hvis produktet har paragraf om funktioner
      modal.querySelector(".h3-funktioner").textContent = "Funktioner";
      modal.querySelector(".modal-funktioner").innerHTML = `${abonnement.funktioner}`;
    } else {
      modal.querySelector(".h3-funktioner").textContent = "";
      modal.querySelector(".modal-funktioner").innerHTML = "";
    }
    if (abonnement.anvendelse !== "") {//hvis produktet har paragraf om anvendelse
      modal.querySelector(".h3-anvendelse").textContent = "Anvendelse";
      modal.querySelector(".modal-anvendelse").innerHTML = `${abonnement.anvendelse}`;
    } else {
      modal.querySelector(".h3-anvendelse").textContent = "";
      modal.querySelector(".modal-anvendelse").innerHTML = "";
    }
    if (abonnement.ingredienser !== "") {//hvis produktet har paragraf om ingredienser
      modal.querySelector(".h3-ingredienser").textContent = "Ingredienser";
      modal.querySelector(".modal-ingredienser").innerHTML = `${abonnement.ingredienser}`;
    } else {
      modal.querySelector(".h3-ingredienser").textContent = "";
      modal.querySelector(".modal-ingredienser").innerHTML = "";
    }

    modal.showModal(); //viser pop up
    document.addEventListener("click", function(event) {
      if (event.target == modal) modal.close(); //lukker pop up når man klikker uden for den
    });
  }
   

        /* ---------- Her starter tæller funktionen. ---------- */

    //De her variabler taget fat i all de elementer der har den valgte class. Da der er mere end en, indeholder hver variable en Array.
    let minus = document.querySelectorAll(".minus")
    let plus = document.querySelectorAll(".plus")
    let tal = document.querySelectorAll(".add-tal")
    let overskrift = document.querySelectorAll(".produkt-navn")
    

    tilføjTal(minus, plus, tal, overskrift);
}

function tilføjTal(minus, plus, tal, overskrift) {
    //opretter en tomt Array som vi senere fylder med 0 taller
    let counter = []
    const oversigt = document.querySelector(".oversigt");
    const totalContainer = document.querySelector(".total-container");
    let total = 0
    let allePriser = []

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
          if (total < 12) {
            // tilføjer et til det objekt i counter der er = "i", altså dens index number.
            counter[i]++
            // bruger textCentent til at sætte det ind i html, på den måde ændres værdien på siden. "${}" bruger til at lave en integer om til en string.
            // integer er et number i JS, string er tekst. tekst i JS kan også en holde tal, men så er det stadig en string og ikke en integer.
            tal[i].textContent = `${counter[i]}`;
            
            total = 0
            allePriser = []
            allePriser = Array.from(document.querySelectorAll(".add-tal"))
            allePriser.forEach(e => {
            total += parseInt(e.innerText)
            })
            console.log("Total = " + total)
            document.querySelector(".total").innerText = `PAKKER I ALT: ${total}`


            /* tjekker om de "p" tags vi laver eksistere */
            const classExists = document.getElementsByClassName(`titel${[i]}`).length > 0;

            if (classExists) {
              console.log("overskrift findes allrede")
              document.querySelector(`.titel${[i]}`).innerText = `${overskrift[i].innerText} ${tal[i].innerText}`

            } else if (tal[i].innerText <= 0){
              console.log("tallet er 0")
            } else{
              let makeP = document.createElement("p")
            makeP.classList.add(`titel${[i]}`)
            console.log(overskrift[i])
            makeP.textContent = `${overskrift[i].innerText} ${counter[i]}`
            oversigt.appendChild(makeP)
            }
          }
        })
    })

    // denne forEach funktion gør det samme som for oven, den fjerner bare et tal med "counter--" i stedet for "counter++"
    minus.forEach((e, i) => {
        e.addEventListener("click", () => {
            if (tal[i].innerText > "0") {
              counter[i]--
              tal[i].textContent = `${counter[i]}`;
              /* Tæller det totale valg af pakker */

              total = 0
              allePriser = []
              allePriser = Array.from(document.querySelectorAll(".add-tal"))
              allePriser.forEach(e => {
              total += parseInt(e.innerText)
              })
              console.log("Total = " + total)
              document.querySelector(".total").innerText = `PAKKER I ALT: ${total}`
              console.log(tal[i]) 
              
              if (tal[i].innerText == 0) {
                console.log("tallet er 0")
                document.querySelector(`.titel${[i]}`).remove()
                /* document.querySelector(`.titel${[i]}`).innerText = `${overskrift[i].innerText} ${tal[i].innerText}` */

              } else if (tal[i].innerText >= 1){
                console.log("tallet er større end 0")
                document.querySelector(`.titel${[i]}`).innerText = `${overskrift[i].innerText} ${tal[i].innerText}`
              } else {
                console.log("der er noget some ikke virker")
              }
            }
        })
    })
  
 

}

</script>

<?php get_footer(); ?>
