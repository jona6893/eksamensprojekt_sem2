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

  /* ---------- MAKS GRID ---------- */
    #fngoals{
      --repeat: auto-fit;
    }

    @media (min-width: 1121px) {
      .fngoals {
        --repeat: 3;
      }

    }
    body {
      background-color: #FFFDFC;
      background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/streger2.png);
      background-size: cover;
    }
  
  /* -------------------- DESKTOP -------------------- */

    /* ---------- section 1 ---------- */
      #indhold h1{
        color: var(--sort);
        font-family: "sofia-pro", sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 2.5rem;
        font-size: clamp(2.5rem, 2.3rem + 1vw, 3.5rem);
        text-align: center;
        padding-top: 5%;
        padding-bottom: 5%; 
      }


    /* ---------- section 2 ---------- */
      #maincontent{
          display: grid;
          grid-template-columns: 1fr;
          grid-gap: 1.5rem;
          padding-top: 1.5rem;
      }
      #indhold{
        grid-column:1/3;
        grid-row: 1/2;
      }

      a:hover {
        color: none !important;
      }
     

    /* ---------- Bæredygtigt produktion ---------- */
      #subject1{
        display:grid;
        grid-template-columns: 1fr 1fr;
        padding-right: 1.5rem;
        justify-items: center;
        justify-content: end;
        padding-bottom: 8%;
  
      }
      .overskrift1{
        display: grid;
       align-items: center;
       align-content: center;
      }
      .overskrift1 p{
        max-width: 48ch;
      }
      .fngoals{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        width: 78%;
      }
      .fngoals h4{
        margin:0;
        font-size: clamp(0.750rem, calc( 12px + 0.600vw ), 0.900rem);
        line-height: 1.1;
      }
      .goal_one, .goal_two, .goal_three, .goal_fouth, .goal_fith, .goal_sixth{
          display: grid;
          justify-items: center;
          text-align: center;
          align-items: end;
          gap: 20px;
      }

    /* ---------- CERTIFICERET EMBALLAGE ---------- */
      #subject2{
        display: grid;
        padding-block: 5%;
    
        background-color: var(--lyse-blaa);
      }
      .sub2-container{
        display:grid;
        grid-template-columns: 1fr 1fr;
        justify-items: center;
        align-items: center;
      }
      .sub2_text{
        grid-area: 1/1;
        max-width: 48ch;
      }
      .sub2_text1{
        grid-area: 1/1;
        max-width: 48ch;
      }
      .sub2_text2{
        grid-area: 1/2;
        max-width: 48ch;
      }
      .sub2_text3{
        grid-area: 2/1;
        max-width: 48ch;
      }

      .sub2_imgs{
        display: grid;
        justify-items: center;
        width: 100%;
      }
      .sub2_imgs img{
        width:50%;
      }
    /* ---------- BÆREDYGTIGT MERCH ---------- */
      #subject3{
        display: grid;
    grid-template-columns: 1fr 1fr;
    padding-block: 5%;
    gap: 20px;
    padding-right: 1.5rem;
    justify-items: center;
    align-items: end;
    background-image: url(https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/streger4-1.png);
    background-size: cover;
}



      .overskrift3{
        max-width: 48ch;
      }

      .overskrift3 button{
        background-color: black;
          color: white;
          width: 100px;
          border: none;
      }

    /* ---------- FOKUS PÅ SUNDHED ---------- */
      #subject4 {
        display: grid;
        grid-template-columns: 1fr 0.5fr 0.1fr;
        grid-template-rows: 1fr;
        justify-items: center;
        align-items: center;
      }
      .overskrift4 {
        display: grid;
        z-index: 2;
        grid-column: 1/3;
        grid-row: 1/3;
        background-color: white;
        justify-items: start;
        align-items: center;
        padding-inline: 2%;
        max-width: 48ch;
        margin-left: -10%;
        padding-block: 2%;
        max-height: 100%;
      }
      .overskrift4 p{
        max-width: 48ch;
      }

      .overskrift4 button{
        background-color: black;
        color: white;
        width: 100px;
        border: none;
      }
      .video_container{
        grid-column: 1/6;
        grid-row: 1/4;
      }

      .video_container video{
        width:100%;
        height:100%;
        object-fit: cover;
        pointer-events:none;
      }
      .mobil-video{
        display:none;
      }

    /* ---------- SME CLIMATE HUB ---------- */
      #subject5{
        display:grid;

        grid-template-columns: 1fr 1fr;
        padding-block: 5%;
        padding-right: 1.5rem;
        align-items: center;
        justify-items: center;
        gap: 20px;
      }

      .overskrift5{
        max-width: 48ch;

      }

  /* -------------------- MOBILE -------------------- */

    @media (max-width: 750px) {
      #sidebar{
        display:none;
      }
      button{
        margin-block: 10px;
      }
      /* ---------- section 1 ---------- */
        #indhold h1{
          padding-inline: 2%;
        }

      /* ---------- section 2 ---------- */
          #maincontent{
            display: grid;
            grid-gap: 1.5rem;
            padding-top: 1.5rem;
            grid-template-columns: 1fr;
          }
          .overskrift1 {

          }
          #indhold{
            grid-column:1/1;
            grid-row: 1/1;
          }

      /* ---------- Bæredygtigt produktion ---------- */
          #subject1 {
            display: grid;
            padding-left: 0px;
            padding-block: 5%;
            padding-right: 0rem;
            justify-items: center;
            grid-template-columns:1fr;
          }
          .overskrift1 {
            display: grid;
            max-width: 48ch;
            justify-items: start;
            padding-inline: 2%;
          }
          .fngoals {
            display: grid;
            grid-template-columns: repeat(var(--repeat, auto-fit), minmax(150px, 1fr));
            padding-inline: 2%;
          }
      /* ---------- CERTIFICERET EMBALLAGE ---------- */
        #subject2 {
          display: grid;

          padding-left: 0px;
          padding-block: 5%;
          padding-right: 0rem;
          justify-items: center;
          gap: 20px;
        }
        .sub2-container {
          display: grid;
          grid-template-columns: 1fr;
          justify-items: center;
          align-items: center;
        }
        .sub2_indhold {
          display: grid;
          grid-template-columns: 1fr;
          grid-template-rows: 1fr;
          padding-inline: 2%;
          gap: 20px;
        }
        .overskrift2{
          padding-inline: 2%;
          justify-items: start;
        }
        .sub2_text1 {
          grid-area: 1/1;
          max-width: 48ch;
        }

        .sub2_text2 {
          grid-area: 2/1; 
          max-width: 48ch;
        }
        .sub2_text3 {
          grid-area: 3/1;
          max-width: 48ch;
        }
        #subject2 h4{
          padding-bottom: 3%;
        }
        .sub2_text, .sub2_text1, .sub2_text2, .sub2_text3{
          padding-bottom: 3%;
        }

      /* ---------- BÆREDYGTIGT MERCH ---------- */
        #subject3 {
          display: grid;
          grid-area: 3/3;
          grid-template-columns: 1fr;
          padding-left: 0px;
          padding-block: 0%; 
          padding-bottom: 5%;
          gap: 20px;
          padding-right: 0rem;
          justify-items: center;
          align-items: center;
        }
        #subject3 h4{
          padding-bottom: 3%;
        }
        .overskrift3{
          padding-inline: 2%;
        }
      /* ---------- FOKUS PÅ SUNDHED ---------- */
        #subject4 {
          display: grid;
          grid-template-columns: 1fr;
          grid-template-rows: 0.5fr 1fr;
          justify-items: center;
          align-items: center;
        }
        .overskrift4 {
          display: grid;
          z-index: 2;
          grid-column: 1/2;
          grid-row: 2/3;
          background-color: white;
          padding-inline: 2%;
          max-width: 48ch;
          margin-left: 0;
          padding-block: 2%;
          max-height: 100%;
          align-content: center;
          align-items: center;
  
        }
        
        .video_container {
          grid-column: 1/3;
          grid-row: 1/2;
          width: 100%;
          height: 100%;
          aspect-ratio: 16/9;
        }
        .video_container video{
          display:none;
          width:100%;
          height:100%;
          object-fit: cover;
          pointer-events:none;
        }
        .mobil-video{
          display:block;
          width:100%;
        }

      /* ---------- SME CLIMATE HUB ---------- */
          #subject5 {
            display: grid;
            grid-area: 5/3;
            padding-left: 0px;
            grid-template-columns: 1fr;
            padding-block: 5%;
            padding-top: 5%;
            padding-right: 0rem;
            align-items: center;
            justify-items: center;
            gap: 20px;
          }

        .overskrift5 {
          max-width: 48ch;
          padding-inline: 2%;
          order: 1;
        }
      
    }


</style>
<main>

  <section id="maincontent" >
  <div id="indhold">
  <h1>SOCIALT ANSVAR</h1>
  <div id="subject1" class="max-width">
  <div class="overskrift1">
    <h2>BÆREDYGTIG PRODUKTION</h2>
    <p>Alle Eace-produkter er produceret i Danmark, for at sikre transparens og bedst mulig kvalitet. Tyggegummiet produceres med FN’s principper for bæredygtig udvikling og FN’s 17 verdensmål. De mest relevante verdensmål som indgår i vores produktion er:</p>
    </div>
    <div class="fngoals">
      <div class="goal_one">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_3.svg" alt="maal3">
      </div>
      <div class="goal_two">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_5.svg" alt="maal5">
      </div>
      <div class="goal_three">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_12.svg" alt="maal12">
      </div>
      <div class="goal_fouth">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_13.svg" alt="maal13">
      </div>
      <div class="goal_fith">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_15.svg" alt="maal15">
      </div>
      <div class="goal_sixth">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/vm_16.svg" alt="maal16">
      </div>
    </div>
  </div>
  <div id="subject2">
    <div class="sub2-container max-width">
    <div class="sub2_indhold max-width">
      <div class="sub2_textcontainer">
      <h2>CERTIFICERET EMBALLAGE</h2>
      <div class="sub2_text">
      <p>Alt emballage er, ligesom vores tyggegummi, også produceret i Danmark. Vores emballage har fået certifikaterne FSC, ClimateCalc og Svanemærket, for at garantere bæredygtig emballage og formindske vores indvirkning på miljøet så meget som muligt.</p>
      </div>
    <div class="sub2_text1">
    <h4>FSC-CERTIFICERET KARTONNAGE</h4>
    <p>FSC®, Forest Stewardship Council, er et globalt certifikat. Det sikrer blandt andet, at skoven ikke lider overlast. I en FSC-skov fældes træer i takt med at der plantes nye.</p>
    </div>
    <div class="sub2_text2">
    <h4>CO₂-NEUTRAL KARTONNAGE</h4>
    <p>Eace kompenserer for udledningen af CO₂ i produktionen af kartonnage. Det betyder at vi støtter klima-projekter, gennem ClimateCalc, der resulterer i tilsvarende reduktion af CO₂.</p>
    </div>
    <div class="sub2_text3">
    <h4>SVANEMÆRKET KARTONNAGE</h4>
    <p>Svanemærket er Danmarks officielle miljømærke, og er en garanti for bæredygtigt papir og produktion. Alt Eace kartonnage er produceret på et svanemærket trykkeri i Danmark.</p>
    </div>
    </div>
  </div>
  <div class="sub2_imgs">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/maerker.png?_t=1654075831" alt="maerker">
    </div>
    </div>
  </div>

  <div id="subject3" class="max-width">
    <div class="sub3_img">
      <img src="https://ucarecdn.com/21ed9a7e-7ea7-45d2-9e96-729851d3e280/-/format/auto/-/preview/3000x3000/-/quality/lighter/BAEREDYGTIGT-MERCH.jpg" alt="">
    </div>
    <div class="overskrift3"> 
    <h2>BÆREDYGTIGT MERCH</h2>
    <h4>NEXT GENERATION MERCH.</h4>
    <p>I samarbejde med Neutral® har vi lavet en bæredygtig merch kollektion i høj kvalitet. Alle produkterne er lavet af 100% økologisk og fairtrade bomuld. 

    <br><br>Kollektionen består af tre produkter: Hoodie, T-shirt og totebag. Alle tre produkter er med et simpelt design og citater, der udtrykker vores værdier.

    <br><br>Vi ønsker at vores merch produkter er i orden for alle. For vores planet. Landmænd. Arbejdere. Og for alle jer. Derfor er alle vores produkter fremstillet og certificeret ifølge de højeste miljømæssige, sociale og etiske standarder i verden!</p>
    <button>KØB NU</button>
  </div>
  </div>
  <div id="subject4">
    <div class="overskrift4">
    <h2>FOKUS PÅ SUNDHED</h2>
    <p>Vi ved godt, at sundhed ikke alene ligger i tyggegummi, men vores mission er at være en lille hjælp i hverdagen til et sundere liv med mere overskud.

    <br><br>Vi vil gerne forsøge at inspirere folk til at leve en sundere og friskere hverdag. Derfor fokuserer vi også på, at sundhed desuden handler om at bruge tid på det, der gør dig glad – at tage et break fra hverdagen og nyde livet med dem, man holder af.

    <br><br>Vores Weekend Getaway kampagne handler netop om at sætte fokus på dette. 
    Du kan se kampagnen nedenfor.
    </p>
    <button>SE VIDEO</button>
  </div>
  <div class="video_container">
    <img class="mobil-video" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/06/ezgif.com-gif-maker.gif" alt="Gif af 2 kvinder med tyggegummi og blomster">
    <video src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/VB-H264-Proxy-half-size.mov" autoplay loop muted></video>
  </div>
  </div>
  <div id="subject5" class="max-width">
    <div class="overskrift5">
    <h2>SME CLIMATE HUB: VI FORPLIGTER OS TIL AT NÅ KLIMAMÅLENE</h2>
    <p>Vi tror på at klimamålene er fundamentale for at gøre en forskel for miljøet, og vi har derfor i samarbejde med SME Climate Hub forpligtet os til at nå disse mål.
      <br><br>SME Climate Hub er et banebrydende globalt initiativ, fra International Chamber of Commerce, Exponential Roadmap Initiative, We Mean Business coalition og United Nations Race to Zero</p>
  </div>
  <div class="sub5_img">
    <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/themes/oceanwp-childtheme/svg/sme.png?_t=1654079705" alt="">
  </div>
  </div>


  </div>

  </section>
</main>
<script>
    
</script>

<?php get_footer(); ?>