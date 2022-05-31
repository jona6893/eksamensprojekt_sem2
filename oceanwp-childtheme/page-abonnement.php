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
/* splashbillede, samt placering af teksten oven på */
  #splash-image {
    position: relative;
    background-size: cover;
    height: 65vh;
    margin-bottom: 80px;
    display: grid;
    justify-items:center;
    align-items:center;

  }
/* selve splashbilledet og placering */
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
/* h1 på splashbilledet */
#splash-image h1 {
    position: absolute;
    bottom: 30vh;
    left: 5%;
    font-weight: 800;
    font-size: 3rem;
   
  }

 /* grid til teksten på splashbilledet */
 #splash-image p {
  position: absolute;
    bottom: 24vh;
    left: 5%;
    font-size: 1rem;
    
    
 }
/* ? */
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
    padding-bottom:60px;
    justify-items:center;
  }
  /* filtrerings knappers udseende */
  .filter-btn {
    color: white;
    /* border: 1px var(--sort) solid; */
    background-color:var(--sort) ;
    padding: 8px 12px;
    width: 160px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 0.875rem;
    
    transition: color 0.2s, background-color 0.2s;
    
  } 

  .filter-btn.selected {
    color: var(--sort);
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border:none;
  }

  #produkter {
    display: flex;
   /*  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); */
   flex-direction: column
  }


.produkt-card {
    display: grid;
    border-top: solid 1px grey;
    gap: 20px;
    grid-template-columns: 1fr 2fr 1fr;
     grid-template-rows: 300px;
     padding:25px;

}
 p{
  max-width:55ch;
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
   
    font-size: 1.5rem !important;
    margin-bottom: 4px;
  }

  @media (max-width:974px) {
    .produkt-card{
      grid-template-columns:1fr 0.2fr;
    }
    .om-produktet{
  grid-column:1/2;
}
.add-container{
   align-items: flex-end;
   
  }
  }
  .abo-img{
    position: relative;
    aspect-ratio:738 /1417 ;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background-size: cover;
    height: 100%;
  }
  .add-container{
     display: flex;
    justify-content: flex-end;
    align-items:center;
  }

.add-container button{
     width:25px;
     height:25px;
     background-color: white;
    border:none;
    padding:0%;
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
  }
.add-grid-container{
       display: flex;
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
height:25px;
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
  border-bottom:1px solid grey;
  padding-top:30px;
  padding-bottom:30px;
}
.box-3{
  display:grid;
  gap:120px;
}
.oversigt{
  display:grid;
  grid-template-columns:1fr 1fr;
}
.total{
  grid-column:2/3;
}
.next{
  width:120px;
}
</style>

<main id="main-content">

  <template>
    <article class="produkt-card">
    <div class="abo-img">
    </div >
    <div class="om-produktet">
      <h3 class="produkt-navn"></h3>
      <p class="produkt-info"></p>
      <button class="read-more">LÆS MERE</button>
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
    
    <h1>SKRÆDDERSY DIT ABONNEMENT</h1>
    <p class="abo-info">
      Få 12 pakker tyggegummi til 199kr efter eget valg leveret
      i din postkasse hver måned eller hver anden måned.
  </p>
    
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

  <section id="produkter" class="max-width"></section>

<section id="add-cart" class="max-width">
  <div id="grid-container-cart">

    <div class="box-1">
    <h4>TILFØJET TIL DIT ABONNEMENT</h4>
    <div class="oversigt">
      <p class="total">PAKKER I ALT:</p>
    </div>
    </div>
    <div  class="box-2">
    <h4>VÆLG HYPPIGHED</h4>
    </div>
    <div  class="box-3">
      <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">v</button>
       <div id="myDropdown" class="dropdown-content">
       <a href="#0">HVER MÅNED</a>
        <a href="#0">HVER ANDEN MÅNED</a>
      </div>
    </div>
    <button class="next"> GÅ TIL KURV</button>
    </div>
  </div>

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
            clone.querySelector(".produkt-info").textContent = `${abonnement.produkt_info}`;
            //clone.querySelector("article").addEventListener("click", () => location.href = `${produkt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
            mainContent.appendChild(clone);
            visteProdukter = document.getElementById("produkter").childElementCount;
        }
    });
    document.querySelector(":root").style.setProperty("--viste-produkter", visteProdukter);

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
        })
    })

    // denne forEach funktion gør det samme som for oven, den fjerner bare et tal med "counter--" i stedet for "counter++"
    minus.forEach((e, i) => {
        e.addEventListener("click", () => {
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

        })
    })
  
 

}

/* --------- Her Stater Dropdown menu --------- */
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<?php get_footer(); ?>
