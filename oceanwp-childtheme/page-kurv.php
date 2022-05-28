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
/* -------------------- MOBILE -------------------- */
    /* ---------- Layout ---------- */
        #first_section {
            display: grid;
            width: 100%;
            height: 100%;
            justify-items: center;
            gap: 20px;
            padding: 5%;
        }

        .de-tre-felter {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 50px;
            width:100%;
        }

        input{
            color:white;
        }
    /* ---------- Kurv ---------- */
        .kurv{
            display: grid;       
            border-radius: 10px;
            padding: 50px 5%;
            gap: 20px;
        }

        .produkt{
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
        }

        .produkt img{
            max-width: 40%;
        }
        .total{
            display: grid;
            justify-items: end;
        }
        .total h4, h3{
            margin:0;
        }

        .total div{
            border: 1px solid black;
            border-radius: 10px;
            display: grid;
            padding: 2%;
            align-items: center;
        }
        .disapear{
            display:none !important;
        }
    /* ---------- Adresse ---------- */
        .adresse{
            display:grid;
            background: rgb(2,0,36);
            background: linear-gradient(11deg, rgba(2,0,36,1) 0%, rgba(51,51,80,1) 100%, rgba(0,212,255,0) 100%);
            border-radius: 10px;
            padding: 50px 5%;
            gap:20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }    
        .adresse h2{
            color:white;
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
            border-bottom: solid 1px white;
        }

        ::placeholder{
            color:#ffffffa6;
        }
        
    /* ---------- Betaling ---------- */
        .betaling{
            display:grid;
            background: rgb(2,0,36);
            background: linear-gradient(11deg, rgba(2,0,36,1) 0%, rgba(51,51,80,1) 100%, rgba(0,212,255,0) 100%);
            border-radius: 10px;
            padding: 50px 5%;
            gap:20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .betaling h2{
            color:white;
        }
        .datoer{
            display:flex;
            gap: 5px;
        }

        .betaling input{
            background-color:rgb(0 0 0 / 0%);
            border: none;
            border-bottom: solid 1px white;
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
            background-color: white;
        }
        .kort p{
            color:white;
            margin:0;
        }
        .kort{
            display: grid;
            aspect-ratio: 1.7/1;
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

    <section id="first_section">
        <h1>KURV</h1>
        <div class="de-tre-felter">
            <div class="kurv">
                <h2>Kurv</h2>
            
                <div class="produkt pro">
                <img src="https://cdn.shopify.com/s/files/1/0510/4300/8670/products/VITAMIN-BOOST-KOLLI_900x.jpg?v=1650460271" alt="">
                <div>
                <h3>Produkt 1</h3>
                <p class="pris">150</p>
                </div>
                <h3 class="remove">X</h3>
                </div>
                <div class="produkt pro">
                <img src="https://cdn.shopify.com/s/files/1/0510/4300/8670/products/HEALTHY-TEETH-KOLLI_900x.jpg?v=1650460506" alt="">
                <div>
                <h3>Produkt 2</h3>
                <p class="pris">250</p>
                </div>
                <h3 class="remove">X</h3>
                </div>
                <div class="total">
                    <div>
                        <h4>Total</h4>
                        <h3 class="totalnr">250</h3>
                    </div>
                </div>
            </div>
            <div class="adresse">
                <h2>Adress</h2>
                <div class="navn-tel">
                <input type="text" placeholder="Navn">
                <input type="text" placeholder="Telefon">
                <input type="text" placeholder="E-Mail">
                <input type="text" placeholder="Land">
                </div>
                <div class="by-post">
                <input type="text" placeholder="By">
                <input type="text" placeholder="Post-nr">
                </div>
            </div>
            <div class="betaling">
                <h2>Betalings Informationer</h2>
                <div class="kort">
                    <div class="chipnbrand">
                    <div class="kortfigur"></div>
                    <p>eace kredit</p>
                    </div>
                    <p class="credit-navn">1234-1234-1234-1234</p>
                    <div class="day-month">
                        <p class="credit-day">12</p>
                        <p>/</p>
                        <p class="credit-month">2022</p>
                    </div>
                    <p class="credit-nr">Jane Doe</p>
                </div>
                <div class="kortnr">
                    <input class="cc-navn" type="text" placeholder="Navn"> 
                    <input class="cc-nummer" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="19" placeholder="Kort Nummer"> 
                </div>
                <div class="datoer">
                    <input class="cc-mm" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="2" placeholder="MM">
                    <input class="cc-yyyy" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="4" placeholder="YYYY">
                    <input type="number" placeholder="CVC">
                </div>
                <button class="betal">Betal</button>
            </div>

        </div>
    </section>


</main>


<script>

const remove = document.querySelectorAll(".remove");
const pris = document.querySelectorAll(".pris");
const pro = document.querySelectorAll(".pro");
let allPrices = []
let totalvalue = 0
let creditname = document.querySelector(".cc-navn")
let creditnumber = document.querySelector(".cc-nummer")
let creditmonth = document.querySelector(".cc-mm")
let credityear = document.querySelector(".cc-yyyy")

console.log(remove)

creditname.addEventListener("input", () => {
    document.querySelector(".credit-navn").textContent = `${creditname.value}`
})
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
printValue();

function printValue () {
    allPrices = []
    totalvalue = 0

pris.forEach(e =>{

   allPrices.push(parseInt(e.textContent))
   console.log(allPrices)
});


allPrices.forEach(e => {
    totalvalue += e
    console.log(totalvalue)
});

    document.querySelector(".totalnr").textContent = `${totalvalue} DKK`;
};

remove.forEach((e, i) => {
    e.addEventListener("click", () => {
    pris[i].textContent = "0"    
    pro[i].classList.add("disapear")
    printValue();
})
})


</script>

<?php get_footer(); ?>