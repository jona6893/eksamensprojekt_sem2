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
        .betal {
            border: none;
            background-color: white;
        }

/* -------------------- DESKTOP -------------------- */
        
        

@media (min-width: 750px) {}
</style>


<main>

    <section id="first_section">
        <h1>KURV</h1>
        <div class="de-tre-felter">
            <div class="kurv">
                <h2>Kurv</h2>
                <div class="produkt pro1">
                <img src="" alt="">
                <h3>Produkt 1</h3>
                <h3 class="remove">X</h3>
                </div>
                <div class="produkt pro2">
                <img src="" alt="">
                <h3>Produkt 1</h3>
                <h3>X</h3>
                </div>
                <div class="total">
                    <div>
                        <h4>Total</h4>
                        <h3>250 DKK</h3>
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
                    <div class="kortfigur"></div>
                    <p class="credit-nr"></p>
                    <p class="credit-navn"></p>
                </div>
                <div class="kortnr">
                   <input type="text" placeholder="Navn"> 
                   <input type="text" placeholder="Kort Nummer"> 
                </div>
                <div class="datoer">
                    <input type="text" placeholder="MM">
                    <input type="text" placeholder="YYYY">
                    <input type="text" placeholder="CVV">
                </div>
                <button class="betal">Betal</button>
            </div>

        </div>
    </section>


</main>


<script>

const remove = document.querySelector(".remove")

remove.addEventListener("click", () => {
    document.querySelector(".pro1").classList.add("disapear")
});

</script>

<?php get_footer(); ?>