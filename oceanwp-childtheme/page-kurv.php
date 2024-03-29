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
  }
/* -------------------- MOBILE -------------------- *
        
    /* ---------- Layout ---------- */
        h4{
            margin:0;
        }

        #first_section {
            display: grid;
            width: 100%;
            height: 100%;
            justify-items: center;
            gap: 20px;
            padding: 5%;
            
            align-content: center;
        }

        .de-tre-felter {
            display: grid;
            grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
            gap: 50px;
            width: 100%;
            justify-content: center;
        }
        .trin{
            display: grid;
            grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
            gap: 50px;
            width: 100%;
        }
        .step{
            display:none;
        }
       
        strong {
            font-weight: 800;
        }
        

        @media (max-width: 1112px) {
            .de-tre-felter{
                --repeat:1;
                display: grid;
                grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 350px));
            }
             .trin{
                display:none;
             }
            .step{
                display: block;
            }
        }

    /* ---------- Kurv ---------- */
        .kurv{
            display: grid;       
            min-height: 500px;
            padding: 50px 5%;
            gap: 20px;
            box-shadow: rgb(0 0 0 / 10%) -4px 9px 25px -6px;
            background-color: white;
        }

        .produkt{
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
        }

        .produkt img{
            max-width: 40%;
            max-height:40%;
        }
        .produkt p{
            display: grid;
            align-items: center;
        }
        .total{
            display: grid;
            justify-items: end;
        }
        .total h4, h3, p{
            margin:0;
        }

        .total div{
            
            display: grid;
            padding: 2%;
            align-items: center;
            max-height: 100px;
        }
        .disapear{
            display:none !important;
        }
        .kurv p {
            font-size: 0.8rem;
        }
        .info {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
        }
        .info .titel {
            grid-column: 1/2;
            grid-row: 1/2;
            margin: 10px;
        }
        .info .pris {
            grid-column: 3/4;
            grid-row: 2/3;
        }   
        .info .remove {
            grid-column: 3/4;
            grid-row: 1/2;
            text-align: end;
        } 
        .remove{
            cursor: pointer;
        }
        
        
        
    /* ---------- Adresse ---------- */
        .adresse{
            display:grid;
            /* background: rgb(2,0,36);
            background: linear-gradient(11deg, rgba(2,0,36,1) 0%, rgba(51,51,80,1) 100%, rgba(0,212,255,0) 100%); */
            min-height: 500px;
            padding: 30px;
            gap:20px;
            box-shadow: rgb(0 0 0 / 10%) -4px 9px 25px -6px;
            background-color: white;
            
        }    
        .adresse h3{
            color:black;
        }
        .navn-tel{
            display:grid;
            gap:20px;
        }
        .by-post{
            display:grid;
            gap:20px;
        }
        .adresse input{
            background-color:rgb(0 0 0 / 0%);
            border: none;
            border-bottom: solid 1px black;
            
            

        }
        input [type="text"] {
            color:black;
            font-size: 0.9rem;
            font-family: "sofia-pro", sans-serif;
            font-style: 800; 
        }

        ::placeholder{
            color:black;
            font-size: 0.7rem;
            font-family: "sofia-pro", sans-serif;
            font-style: 800;
            opacity: 0.5;
        }
        
    /* ---------- Betaling ---------- */
        .betaling{
            display:grid;
            /* background: rgb(2,0,36);
            background: linear-gradient(11deg, rgba(2,0,36,1) 0%, rgba(51,51,80,1) 100%, rgba(0,212,255,0) 100%); */
            min-height: 500px;
            padding: 20px 8%;
            gap:20px;
            box-shadow: rgb(0 0 0 / 10%) -4px 9px 25px -6px;
            background-color: white;
        }
        .betaling h3{
            color:black;
        }
        .datoer{
            display:flex;
            gap: 5px;
        }

        .betaling input{
            background-color:rgb(0 0 0 / 0%);
            border: none;
            border-bottom: solid 1px black;
            
        }

        .datoer input{
            width:50%;
            
        }

        .kortnr input{
            width:100%;
            
        }
        .kortnr{
            display: grid;
            padding: 2% 0%;
            gap: 20px;
        }
        .betal {
            border: none;
            background-color: black;
            color:white;
            border: solid 1px black;
            padding: 0px;
            width: 150px;
            height: 50px;
            margin: auto;
        }
        .betal:hover{
            background-color: #ffffff00;
            color: black;
            border: solid 1px black;
        }
        
        .kort p{
            color:white;
            margin:0;
        }
        .kort{
            display: grid;
            aspect-ratio: 1.8/1;
            /* background: rgb(255,181,132); */
            background: linear-gradient(0deg, rgba(255,181,132,1) 0%, rgba(171,191,173,1) 43%, rgba(0,212,255,1) 100%);
            border-radius: 10px;
            align-items: center;
            padding: 5%;
        }
        .kortfigur{
            aspect-ratio: 1.1/1;
            width: 20%;
            /* background: rgb(255,215,0);
            background: linear-gradient(90deg, rgba(255,215,0,1) 0%, rgba(255,224,59,1) 31%, rgba(192,192,192,1) 100%); */
            background-image: url("https://cdn-icons-png.flaticon.com/512/6404/6404100.png");
            background-size: cover;
        }
        .chipnbrand{
            display: flex;
            justify-content: space-between;
        }
        .day-month{
            display:flex;
            justify-content: center;
        }
/* -------------------- DESKTOP -------------------- */
        
        

@media (min-width: 750px) {}
</style>

        <!-- <template>
            <article class="produkt">
            <img class="produktBillede"src="" alt="">
            <div>
            <h3 class="title"></h3>
            <p class="pris"></p>
            </div>
            <h3 class="remove"></h3>
            </article>
        </template> -->
<main>

    <section id="first_section" class="max-width">
        <h1>KURV</h1>
        <div class="trin">
            <p><strong>Step 1:</strong> Kurv</p>
            <p><strong>Step 2:</strong> Adresse</p>
            <p><strong>Step 3:</strong> Betalingsinformationer</p>
        </div>
        <div class="de-tre-felter">
            <div class="kurv">
                <p class="step step1"><strong>Step 1:</strong> Kurv</p>
                
            
                <div class="produkt pro">
                <img src="https://cdn.shopify.com/s/files/1/0510/4300/8670/products/VITAMIN-BOOST-KOLLI_900x.jpg?v=1650460271" alt="">
                <div class="info">
                <p class="titel">Vitamin Boost</p>
                <p class="pris">250 DKK</p>
                
                <p class="remove">X</p></div>
                </div>
                <div class="produkt pro">
                <img src="https://cdn.shopify.com/s/files/1/0510/4300/8670/products/HEALTHY-TEETH-KOLLI_900x.jpg?v=1650460506" alt="">
                <div class="info">
                <p class="titel">Healthy Teeth </p>
                <p class="pris">250 DKK</p>
                
                <p class="remove">X</p></div>
                </div>
                <div class="total">
                    <div>
                        <p>Total</p>
                        <h5 class="totalnr">250</h5>
                    </div>
                </div>
            </div>
            <div class="adresse">
                <p class="step step2"><strong>Step 2:</strong> Adresse</p>
                
                <div class="navn-tel">
                <input type="text" placeholder="Navn">
                <input type="tel" placeholder="Telefon">
                <input type="email" placeholder="E-Mail">
                <input type="text" placeholder="Land">
                <input type="text" placeholder="By">
                <input type="text" placeholder="Post-nr">
                </div>
                <div class="by-post">
                
                </div>
            </div>
            <div class="betaling">
                <p class="step step3"><strong>Step 3:</strong> betalingsinformationer</p>
                
                <div class="kort">
                    <div class="chipnbrand">
                    <div class="kortfigur"></div>
                    <p>EACE kredit</p>
                    </div>
                    <p class="credit-navn">Jane Doe</p>
                    <div class="day-month">
                        <p class="credit-day">12</p>
                        <p>/</p>
                        <p class="credit-month">2022</p>
                    </div>
                    <p class="credit-nr">1234-1234-1234-1234</p>
                </div>
                <div class="kortnr">
                    <input class="cc-navn" type="text" placeholder="Navn"> 
                    <input class="cc-nummer" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="16" placeholder="Kort Nummer"> 
                </div>
                <div class="datoer">
                    <input class="cc-mm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="2" placeholder="MM">
                    <input class="cc-yyyy" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="4" placeholder="YYYY">
                    <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" placeholder="CVC">
                </div>
                <button class="betal">Betal</button>
            </div>

        </div>
    </section>


</main>


<script>
/* .querySelectorAll vælger alle html element der har samme klasse eller type, og laver et array ud fra dem. */
const remove = document.querySelectorAll(".remove");
const pris = document.querySelectorAll(".pris");
const pro = document.querySelectorAll(".pro");
/* allPrices = [] - altså et tomt array */
let allPrices = []
/* totalvalue = 0 - 0 er et interger(tal) i js, hvis der havde været quotes roundt om "0" havde det været en string(tekst)) */
let totalvalue = 0
let creditname = document.querySelector(".cc-navn")
let creditnumber = document.querySelector(".cc-nummer")
let creditmonth = document.querySelector(".cc-mm")
let credityear = document.querySelector(".cc-yyyy")

console.log(remove)

/* Lytter til når der bliver skrevet i tekst felterne, ved hjælpe af "input". placere derefter det skrivet tekst i det valgt feltet */
creditname.addEventListener("input", () => {
        /* $ betyder at der er inde i {} skal være i string form. string er den type tekst som vi skriver i html */
    document.querySelector(".credit-navn").textContent = `${creditname.value}`
})
/* gentager det som sker ovenover bag på nogle andre felter. */
creditnumber.addEventListener("input", () => {
    document.querySelector(".credit-nr").textContent = `${creditnumber.value}`
})
creditmonth.addEventListener("input", () => {
    document.querySelector(".credit-day").textContent = `${creditmonth.value}`
})
credityear.addEventListener("input", () => {
    document.querySelector(".credit-month").textContent = `${credityear.value}`
})


    

    console.log(creditname)
    




console.log(pris)
/* start funktionen printValue */
printValue();

function printValue () {
/* laver vores variabler og nustiller dem */
    allPrices = []
    totalvalue = 0
/* forEach funktion, da "pris" er et array.vi siger altså for hvert element(e) i vores array(pris) skal vi starte en funktion */
pris.forEach(e =>{
/* ".push er en metode til at skubbe element ind i en array. da "allPrices" er et tomt array, skubber vi hvert element i "pris" ind i "allPrices"  */
   allPrices.push(parseInt(e.textContent/* "parseInt" tager inholdet i () og laver det om et en Interger(et helt tal i JS).*/))
   console.log(allPrices)
});


allPrices.forEach(e => {
    /* for hvert element i "allPrices" skal vi pluse dem sammen og tilføje dem til "totalvalue */
    totalvalue += e
    console.log(totalvalue)
});
    /* Print indholdet af "totalvalue i string format efterfulgt af DKK" */
    document.querySelector(".totalnr").textContent = `${totalvalue} DKK`;
};
/* fjerner det valgt element fra siden ved at tilføje klassen ".disapear" */
remove.forEach((e, i) => {
    e.addEventListener("click", () => {
    /* i er index nummert i vores array "remove", hvert element i et array har et index nummer. det første element i et array har index nummert 0 derefter tæller den for hvert element.  */
    pris[i].textContent = "0" 
    /* [] bruges til at vælge et element inde i et array. Hvis vi gerne ville have element nummer 2, skriver vi "pris[1]", da index nummert start fra 0 af. 
  i respræsentere altså index nmummert på det valgt element fra arrayen "remove" */
    pro[i].classList.add("disapear")
    /* start vores printValue funktion. */
    printValue();
})
})


</script>

<?php get_footer(); ?>