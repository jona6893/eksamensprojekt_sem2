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
    body{
        background-color: #FFFDFC;
    background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/streger4-1.png");
    background-size: cover;
}
a:hover {
color: #7CB5FF;
}
/* -------------------- MOBILE -------------------- */
/* ---------- SECTION1 ---------- */
#section1 {
    display: grid;
    justify-items: center;
    padding-inline: 3%;
    padding-block: 100px;
    
    
}

#section1 p {
    max-width: 87ch;
    
}



/* ---------- SECTION2 ---------- */
#section2_desktop {
    display: none;
}

#section2_mobile {
    display: grid;
    justify-items: center;
    padding-inline: 3%;
}

#section2_mobile h2 {
    padding-bottom: 25px;
}

.videntekst h4 {
    padding-top: 5%;

}

/* ---------- SECTION3 ---------- */
h2 {
    text-align: center;
}
p {
    padding-top: 2%;
}
#section3 {
    padding: 5% 0;
}

.container {
    width: 100%;

}

.accordionItem {

    padding: 1rem;
}

.accordion-link {
    display: flex;
    padding: 1rem 0;
    justify-content: space-between;
    align-items: center;
}

.plusadd {
    width: 20px;
    height: 100%;
    transition: 0.5s;
}


.answer {
    overflow: hidden;
    max-height: 0;
    position: relative;
    transition: max-height 650ms;
}

.answer::before {
    content: "";
    position: absolute;
    width: 0.6rem;
    height: 90%;
    top: 50%;
    left: 0%;
    transform: translateY(-50%);
}

.accordionItem:target .answer {
    max-height: 100%;
    display: grid;
    gap: 25px;
}

.accordionItem:target .plusadd {
    transform: rotateZ(45deg);
}

hr {
    background-color: black;
    height: 1px;
    margin: 0;
    color: black;
    border: none;
}
.a_2_knap{
    background-color:var(--sort);
    color: white;

}
button{
    width: 170px;
}

/* -------------------- DESKTOP -------------------- */

@media (min-width: 750px) {

    #section2_mobile {
        display: none;
    }

    #section2_desktop {
        display: grid;
        justify-items: center;
        padding: 3%;
        gap: 50px;
    }

    .videntekst-d {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        justify-items: center;
    }
    
    .tekstcontainer1-d  p, .tekstcontainer2-d p{
        width:48ch;
    }
    .afsnit1-d, .afsnit2-d, .afsnit3-d, .afsnit4{
        display: grid;
    }
    
    .imagecontainer-d {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    width: 80%;
    }

    
}

</style>

<main>
<section id="section1">
    <h1>PRODUKTION</h1>
    <p>Her på siden kan du læse mere om ingredienser, produktionen og videnskaben bag.
        Du kan også læse om en lang række videnskabelige studier omkring tyggegummi
        og de ingredienser vi har puttet i Eace Gum.</p>
</section>
<section id="section2_mobile">

    <h2>Videnskaben</h2>
    <div class="videntekst">
        <div class="afsnit1">
            <h4>Udviklet og produceret i Danmark</h4>
            <p>Alle Eace Gum produkter er udviklet og produceret i Danmark. De aktive Ingredienser er nøje udvalgt og
                af højeste kvalitet, for at sikre at de kan hjælpe dig i din hverdag.

                Inden ingredienserne puttes i produkterne testes de seperat forat sikre kvaliteten. Der laves desuden
                et ”certificate of analysis” på hvert produktions-batch for at sikre produkternes indhold og kvalitet,
                så vi er helt sikre på at levere hver eneste gang.
            </p>
        </div>
        <img src="https://ucarecdn.com/bb6f27e9-df38-4daf-8c5c-68934bfd49d5/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202020-03-13%20kl.%2020.36.51.png"
            alt="">
        <div class="afsnit2">
            <h4>Teknologien</h4>
            <p>
                Eace Gum bliver lavet med en patenteret kold og tør teknik, som sikrer atnæringsstofferne holder sig
                aktive under produktionen.

                Normalt bliver tyggegummi lavet under høj varme og højt tryk, hvilket ville resultere i at
                næringsstofferne ville blive inaktive. Derfor er denne teknologi helt essentiel for at sikre
                produkternes effekt.
            </p>
        </div>
        <img src="https://ucarecdn.com/4c959399-154f-49a7-a416-7f8a2f07069b/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202022-01-11%20kl.%2009.17.53.png"
            alt="">
        <div class="afsnit3">
            <h4>Research</h4>
            <p>
                Hos Eace Gum er det essentielt at der er dokumentation for voresprodukters funktionalitet. Derfor
                benytter vi kun næringsstoffer vis egenskaber er godkendt af European Food Safety Authority (EFSA), og
                hvor der er videnskabelige studier der påviser deres effekt.
                Desuden er produkterne testet med både stabilitets-studier, udtygnings-tests og næringsstofferne for
                bio-tilgængelighed.
            </p>
        </div>
        <img src="https://ucarecdn.com/58fc6808-c0c7-4772-a4ab-acb204ebee3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202020-03-13%20kl.%2020.41.38.png"
            alt="">
        <div class="afsnit4">
            <h4>Hvordan virker det?</h4>
            <p>
                Når man tygger Eace Gum, bliver mange af de aktive ingredienser absorberet i mundhulen, også kaldet
                buccal absorbtion.
                Dette betyder at virkningen af næringsstofferne, som f.eks. koffeiner væsentligt hurtigere, end ved
                andre former for indtag.
            </p>
        </div>


    </div>

</section>
<section id="section2_desktop">

    <h2>Videnskaben</h2>
    <div class="videntekst-d">
      <div class="tekstcontainer1-d">
        <div class="afsnit1-d">
        <h4>Udviklet og produceret i Danmark</h4>
        <p>Alle Eace Gum produkter er udviklet og produceret i Danmark. De aktive Ingredienser er nøje udvalgt og af højeste kvalitet, for at sikre at de kan hjælpe dig i din hverdag. 

          Inden ingredienserne puttes i produkterne testes de seperat forat sikre kvaliteten. Der laves desuden et ”certificate of analysis” på hvert produktions-batch for at sikre produkternes indhold og kvalitet, så vi er helt sikre på at levere hver eneste gang. 
        </p>
        </div>
        <div class="afsnit2-d">
          <h4>Teknologi</h4>
          <p>
            Eace Gum bliver lavet med en patenteret kold og tør teknik, som sikrer atnæringsstofferne holder sig aktive under produktionen. 
            
            Normalt bliver tyggegummi lavet under høj varme og højt tryk, hvilket ville resultere i at næringsstofferne ville blive inaktive. Derfor er denne teknologi helt essentiel for at sikre produkternes effekt. 
          </p>
        </div>
          <div class="afsnit3-d">
          <h4>Research</h4>
          <p>
            Hos Eace Gum er det essentielt at der er dokumentation for voresprodukters funktionalitet. Derfor benytter vi kun næringsstoffer vis egenskaber er godkendt af European Food Safety Authority (EFSA), og hvor der er videnskabelige studier der påviser deres effekt. 
            Desuden er produkterne testet med både stabilitets-studier, udtygnings-tests og næringsstofferne for bio-tilgængelighed. 
          </p>
        </div>
        <div class="afsnit4-d">
          <h4>Hvordan virker det?</h4>
          <p>
            Når man tygger Eace Gum, bliver mange af de aktive ingredienser absorberet i mundhulen, også kaldet buccal absorbtion. 
            Dette betyder at virkningen af næringsstofferne, som f.eks. koffeiner væsentligt hurtigere, end ved andre former for indtag. 
          </p>
        </div>
        </div>
       <div class="imagecontainer-d">
        <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/videnskab1.png?_t=1653984776" alt="videnskab1">
        <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/videnskab2.png?_t=1653984776" alt="videnskab2">
        <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/videnskab3.png?_t=1653984776" alt="videnskab3">
      </div>
    </div>
  
</section> 
<section id="section3" class="max-width">
    <h2>Dokumentation</h2>
    <div class="container">
        <div class="accordion">
            <div class="accordionItem" id="question1">
                <a class="accordion-link" href="#question1">Tyggegummi øger koncentrationsevnen <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Mange studier har vist at tyggegummi booster mental performance. Kognitive funktioner såsom
                        koncentration, hukommelse og reaktionstid blev forbedret når testpersonerne tyggede tyggegummi.
                        Man påtænker at boostet kommer fra den øgede blodcirkulation til hjernen, som kommer gennem den
                        fysiske proces i tygningen - nogle studier viste helt op til 25-40% stigning. Dette øger
                        samtidig mængden af ilt i hjernen, hvilket forbedrer hukommelsen and andre kognitive funktioner.
                    </p>
                    <button onclick="window.location.href='https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4449949/';">Læs Hele Studiet Her</button>
                    
                </div>
            </div>
            <div class="accordionItem" id="question2">
                <a class="accordion-link" href="#question2">Forbedrer årvågenhed <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Udover hukommelsen har mange undersøgelser også vist, at tyggegummi kan øge årvågenheden.
                        Tyggebevægelsen i kæben menes at stimulere nerver og dele af hjernen forbundet med ophidselse,
                        ud over at øge blodgennemstrømningen. Dette kan hjælpe folk til at føle sig mere vågne eller
                        holde sig vågne længere. Tyggegummi med myntesmag menes at være særligt nyttigt til dette
                        formål.
                    </p>
                    <button onclick="window.location.href='https://pubmed.ncbi.nlm.nih.gov/20132649/';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question3">
                <a class="accordion-link" href="#question3">Vitamintyggegummi kan være med til at reducere vitaminmangel
                    <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Joshua Lambert, Professor i Madvidenskab på Universitetet for Agricultural Sciences hos
                        Pennsylvania State University, undersøgte vitaminberiget tyggegummi for første gang i 2018.
                        Konklusionen blev at tyggegummi – en behagelig vane for mange – kan være en strategi til at
                        reducere vitaminmangel rundt omkring i verden.
                    </p>
                    <button onclick="window.location.href='https://www.sciencedaily.com/releases/2018/10/181010105610.htm';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question4">
                <a class="accordion-link" href="#question4">Tyggegummi beskytter tænderne <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Den Amerikanske Tandlæge Association anbefaler at tygge sukkerfrit tyggegummi i 20 minutter
                        efter måltider, da det har vist sig at reducere plak, fremme tandemalje, reducere huller og
                        reducere tandkødsbetændelse. Årsagen har at gøre med øget spytstrøm, som reducerer syre på dine
                        tænder, der forårsager forfald. Sørg altid for, at dit tyggegummi er sukkerfrit, da
                        sukkerholdige tyggegummier faktisk kan bidrage til syreopbygningen.
                    </p>
                    <button onclick="window.location.href='https://www.mouthhealthy.org/en/az-topics/c/chewing-gum';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question5">
                <a class="accordion-link" href="#question5">Fluor og tændernes sundhed <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Du kender sandsynligvis fluor fra din tandpasta. Der er tilsat fluorid i langt de fleste
                        tandpastaer som led i den forebyggende tandpleje i Danmark. Det er veldokumenteret i adskillige
                        undersøgelser gennem årene, at fluorid har en positiv og vigtig effekt i forhold til at
                        forebygge huller i tænderne. Fluorid har vist sig at være så effektivt mod huller i tænderne, at
                        forskere i dag af etiske grunde ikke længere kan få lov at udføre forsøg, hvor en kontrolgruppe
                        af børn børster tænder med tandpasta uden fluorid.
                        <br><br>
                        Der er en sammenhæng mellem brugen af fluor, reduktionen af dental caries og stigningen af
                        dental fluorose. Den høje tilstedeværelse af fluor i spyt efter brug af tyggegummi med fluor kan
                        være væsentlig for at forhindre karies.
                    </p>
                    <button onclick="window.location.href='https://pubmed.ncbi.nlm.nih.gov/27352462/';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question6">
                <a class="accordion-link" href="#question6">Tyggegummi imod stress og angst <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Undersøgelser har vist, at tyggegummi kan hjælpe med at lindre nervøs energi og få dig til at
                        føle dig roligere. Det at spise noget tyggegummi kan være en god erstatning for nervøse vaner,
                        såsom neglebidning og benrystelser, når du føler dig stresset. Dette bakkes op af undersøgelser,
                        som viser, at tyggegummi var med til at reducere stresshormonet kortisol hos mange testpersoner.
                    </p>
                    <button onclick="window.location.href='https://pubmed.ncbi.nlm.nih.gov/19268676/)';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question7">
                <a class="accordion-link" href="#question7">Grøn te ekstrakts effekt på ånden <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        De aktive komponenter i grøn te kaldes catechiner. Catechiner er en række polyphenoler som er
                        kendte for deres effekt til at reducere dårlig ånde. Flere studier har dokumenteret denne
                        effekt. Blandt andet nedenstående videnskabelige artikel med test af catechin tilsætning til
                        tyggegummi og deres effekt til at nedbryde dårlig ånde forbindelser som CH3SH.
                    </p>
                    <button onclick="window.location.href='https://books.google.dk/books?hl=da&lr=&id=W8g5kVehRLYC&oi=fnd&pg=PA275&dq=deodorizing+mechanism+of+epigallocatechin+and+chewing+gum+containing+tea+extracts&ots=K4wq5pKQmh&sig=IL3L2jzi31Wo9DR1Pcy10WHEfuQ&redir_esc=y#v=onepage&q=deodorizing%20mechanism%20of%20epigallocatechin%20and%20chewing%20gum%20containing%20tea%20extracts&f=false';">Læs Hele Studiet Her</button>
                </div>
            </div>
            <div class="accordionItem" id="question8">
                <a class="accordion-link" href="#question8">Koffein i tyggegummi <img class="plusadd"
                        src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/add_FILL0_wght400_GRAD0_opsz48.png"
                        alt=""></a>
                <hr>
                <div class="answer ">
                    <p>
                        Tyggegummi er en meget effektiv måde at optage koffein. Der findes videnskabelige studier som
                        viser en Tmax (tiden for, at højest koncentration indtræder i blod plasma) på 0,73 h holdt op
                        imod en Tmax på 1,42 h for en kapsel indeholdende samme dosis koffein – hvilket indikerer en
                        buccal absorption af koffein – og dermed en hurtigere virkning end indtag via piller/kapsler og
                        energi drik.
                    </p>
                    <button onclick="window.location.href='https://pubmed.ncbi.nlm.nih.gov/11839447/';">Læs Hele Studiet Her</button>
                </div>
            </div>
        </div>

    </div>
</section>
</main>

<script>


</script>

<?php get_footer(); ?>