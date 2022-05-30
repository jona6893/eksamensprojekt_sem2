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
    }
  
  /* -------------------- DESKTOP -------------------- */

    /* ---------- section 1 ---------- */
      #heroimage{
        display: grid;
        width:100%;
        height: 80vh;
        background-image:url("https://ucarecdn.com/4f84cc15-95e5-4635-a781-fc4294a3148e/-/format/auto/-/preview/3000x3000/-/quality/lighter/");
        background-size:cover;
        background-position: 100%;
        justify-items: center;
        align-items: center;
      }

      #heroimage h1{
        color: white;
        font-size: 3rem;

      }


    /* ---------- section 2 ---------- */
      #maincontent{
          display: grid;
          grid-template-columns: 250px minmax(10px, 1fr);
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
      #sidebar{
        padding-block: 50px;
        position: sticky;
        top: 50px;
        align-self: start;
        display: grid;
        gap: 20px;
        grid-area:1/1;
        padding-inline: 1.5rem;
        background-color: #ffffff8c;
        z-index:3;
        margin-left: 2%;
      }

      #sidebar button{
        border: none;
        background-color: black;
        color: white;
        text-align: start;
        padding-inline: 3%;
        width: 100%;
      }
      .sidebarSelect{
        border: solid black 2px !important;
        background-color: white !important;
        color: black !important;
        text-align: start !important;
        padding-inline: 3% !important;
      }

    /* ---------- Bæredygtigt produktion ---------- */
      #subject1{
        display:grid;
        grid-area: 1/3;
        padding-left: 250px;
        padding-block: 5%;
        padding-right: 1.5rem;
        justify-items: center;
        gap: 50px;
      }
      .overskrift1{
        display: grid;
        justify-items: center;
      }
      .overskrift1 p{
        max-width: 48ch;
      }
      .fngoals{
        display:grid;
        grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
        gap: 20px;
      }
      .goal_one, .goal_two, .goal_three, .goal_fouth, .goal_fith, .goal_sixth{
        display: grid;
        justify-items: center;
        text-align:center;
      }

    /* ---------- CERTIFICERET EMBALLAGE ---------- */
      #subject2{
        display:grid;
        grid-area: 2/3;
        padding-left: 250px;
        padding-block: 5%;
        padding-right: 1.5rem;
        justify-items: center;
        gap:20px;
        column-gap: 50px;
      }

      .overskrift2{
        display: grid;
        justify-items: start;
        align-items: center;
      }
      .overskrift2 p {
        max-width: 48ch;
      }
      .sub2_indhold{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 20px;
        column-gap: 50px;
        align-items: center;
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
        background-image: url(https://ucarecdn.com/39625410-2c45-4480-a772-79d32ad8a234/-/format/auto/-/preview/3000x3000/-/quality/lighter/);
        background-size: cover;
        background-position: 50%;
        aspect-ratio: 1;
      }
    /* ---------- BÆREDYGTIGT MERCH ---------- */
      #subject3{
        display:grid;
        grid-area: 3/3;
        grid-template-columns: 1fr 1fr;
        padding-left: 250px;
        padding-block: 5%;
        gap: 20px;
        padding-right: 1.5rem;
        justify-items: center;
          align-items: center;
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
        grid-template-columns: 250px 1fr 2%;
        grid-area: 4/3;
        padding-block: 5%;
        grid-template-rows: 1fr;
        justify-items: end;
      }
      .overskrift4 {
        display: grid;
        z-index: 2;
        grid-column: 2/3;
        grid-row: 2/2;
        background-color: white;
        justify-items: start;
        align-items: center;
        padding-inline: 2%;
        max-width: 48ch;
        margin-left: 2%;
        padding-block: 2%;
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

    /* ---------- SME CLIMATE HUB ---------- */
      #subject5{
        display:grid;
        grid-area: 5/3;
        padding-left: 250px;
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
      /* ---------- section 1 ---------- */
        #heroimage{
          display: grid;
          width:100%;
          height: 80vh;
          background-image:url("https://ucarecdn.com/4f84cc15-95e5-4635-a781-fc4294a3148e/-/format/auto/-/preview/3000x3000/-/quality/lighter/");
          background-position:50%;
          background-size:cover;
          justify-items: center;
          align-items: center;
        }

        #heroimage h1{
          color: white;
          font-size: 3rem;

        }

      /* ---------- section 2 ---------- */
          #maincontent{
            display: grid;
            grid-gap: 1.5rem;
            padding-top: 1.5rem;
            grid-template-columns: 1fr;
          }
          #indhold{
            grid-column:1/1;
            grid-row: 1/1;
          }

      /* ---------- Bæredygtigt produktion ---------- */
          #subject1 {
            display: grid;
            grid-area: 1/1;
            padding-left: 0px;
            padding-block: 5%;
            padding-right: 0rem;
            justify-items: center;
          }
          .overskrift1 {
            display: grid;
            max-width: 48ch;
            justify-items: start;
            padding-inline: 2%;
          }
          .fngoals {
            display: grid;
            grid-template-columns: repeat(var(--repeat, auto-fit), minmax(200px, 1fr));
            gap: 20px;
            padding-inline: 2%;
          }
      /* ---------- CERTIFICERET EMBALLAGE ---------- */
        #subject2 {
          display: grid;
          grid-area: 2/1;
          padding-left: 0px;
          padding-block: 5%;
          padding-right: 0rem;
          justify-items: center;
          gap: 20px;
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

      /* ---------- BÆREDYGTIGT MERCH ---------- */
        #subject3 {
          display: grid;
          grid-area: 3/3;
          grid-template-columns: 1fr;
          padding-left: 0px;
          padding-block: 5%;
          gap: 20px;
          padding-right: 0rem;
          justify-items: center;
          align-items: center;
        }

        .overskrift3{
          padding-inline: 2%;
        }

      /* ---------- FOKUS PÅ SUNDHED ---------- */
        #subject4 {
          display: grid;
          grid-template-columns: 1fr;
          grid-area: 4/3;
          padding-block: 5%;
          grid-template-rows: 1fr 1fr;
          justify-items: center;
        }
        .overskrift4 {
          display: grid;
          z-index: 2;
          grid-column: 1/2;
          grid-row: 2/3;
          background-color: white;
          justify-items: center;
          align-items: center;
          padding-inline: 2%;
          max-width: 48ch;
          margin-left: 0%;
          padding-bottom: 1%;
          padding-inline: 2%;
        }
        .video_container {
          grid-column: 1/3;
          grid-row: 1/2;
        }

      /* ---------- SME CLIMATE HUB ---------- */
          #subject5 {
            display: grid;
            grid-area: 5/3;
            padding-left: 0px;
            grid-template-columns: 1fr;
            padding-block: 0%;
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
  <section id="heroimage">
  <h1>ANSVAR</h1>
  </section>
  <section id="maincontent">

  <div id="sidebar">
    <button onclick="window.location.href = 'https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/ansvar/#subject1';">BÆREDYGTIG PRODUKTION</button>
    <button onclick="window.location.href = 'https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/ansvar/#subject2';">CERTIFICERET EMBALLAGE</button>
    <button onclick="window.location.href = 'https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/ansvar/#subject3';"">BÆREDYGTIGT MERCH</button>
    <button onclick="window.location.href = 'https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/ansvar/#subject4';">FOKUS PÅ SUNDHED</button>
    <button onclick="window.location.href = 'https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/ansvar/#subject5';">SME CLIMATE HUB</button>

  </div>
  <div id="indhold">

  <div id="subject1">
    <div class="overskrift1">
    <h2>BÆREDYGTIG PRODUKTION</h2>
    <p>Alle Eace-produkter er produceret i Danmark, for at sikre transparens og bedst mulig kvalitet. Tyggegummiet produceres med FN’s principper for bæredygtig udvikling og FN’s 17 verdensmål. De mest relevante verdensmål som indgår i vores produktion er:</p>
    </div>
    <div class="fngoals">
      <div class="goal_one">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/3_maal.png" alt="">
      <h4>3. SUNDHED OG TRIVSEL</h4>
      </div>
      <div class="goal_two">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/5_maal.png" alt="">
      <h4>5. LIGESTILLING MELLEM KØNNENE</h4>
      </div>
      <div class="goal_three">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/12_maal.png" alt="">
      <h4>12. ANSVARLIGT FORBRUG OG PRODUKTION</h4>
      </div>
      <div class="goal_fouth">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/13_maal.png" alt="">
      <h4>13. KLIMAINDSATS</h4>
      </div>
      <div class="goal_fith">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/15_maal.png" alt="">
      <h4>15. LIVET PÅ LAND</h4>
      </div>
      <div class="goal_sixth">
      <img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/16_maal.png" alt="">
      <h4>16. FRED, RETFÆRDIGHED OG STÆRKE INSTITUTIONER</h4>
      </div>
    </div>
  </div>
  <div id="subject2">
    <div class="overskrift2">
    <h2>CERTIFICERET EMBALLAGE</h2>
    <p>Alt emballage er, ligesom vores tyggegummi, også produceret i Danmark. Vores emballage har fået certifikaterne FSC, ClimateCalc og Svanemærket, for at garantere bæredygtig emballage og formindske vores indvirkning på miljøet så meget som muligt.</p>
    </div>
    <div class="sub2_indhold">
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
    <div class="sub2_imgs">
      
    </div></div>
  </div>
  <div id="subject3">
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
    <video src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/VB-H264-Proxy-half-size.mov" autoplay loop muted></video>
  </div>
  </div>
  <div id="subject5">
    <div class="overskrift5">
    <h2>SME CLIMATE HUB: VI FORPLIGTER OS TIL AT NÅ KLIMAMÅLENE</h2>
    <p>Vi tror på at klimamålene er fundamentale for at gøre en forskel for miljøet, og vi har derfor i samarbejde med SME Climate Hub forpligtet os til at nå disse mål.
      <br><br>SME Climate Hub er et banebrydende globalt initiativ, fra International Chamber of Commerce, Exponential Roadmap Initiative, We Mean Business coalition og United Nations Race to Zero</p>
  </div>
  <div class="sub5_img">
    <img src="https://ucarecdn.com/6cd852de-2fb8-43b2-bdf9-1553a7d04419/-/format/auto/-/preview/3000x3000/-/quality/lighter/" alt="">
  </div>
  </div>


  </div>

  </section>
</main>
<script>

window.addEventListener('scroll', function() {
	const element1 = document.querySelector('#subject1');
	const element2 = document.querySelector('#subject2');
	const element3 = document.querySelector('#subject3');
	const element4 = document.querySelector('#subject4');
	const element5 = document.querySelector('#subject5');
	let position1 = element1.getBoundingClientRect();
	let position2 = element2.getBoundingClientRect();
	let position3 = element3.getBoundingClientRect();
	let position4 = element4.getBoundingClientRect();
	let position5 = element5.getBoundingClientRect();

  const collection = document.querySelector("#sidebar").children;

	// checking whether fully visible
	if(position1.top >= 0 && position1.bottom <= window.innerHeight) {
		console.log('Element1 in view');
    if(collection[0].classList.contains("sidebarSelect") || collection[1].classList.contains("sidebarSelect") || collection[2].classList.contains("sidebarSelect") || collection[3].classList.contains("sidebarSelect") || collection[4].classList.contains("sidebarSelect")){
      collection[1].classList.remove("sidebarSelect")
      collection[2].classList.remove("sidebarSelect")
      collection[3].classList.remove("sidebarSelect")
      collection[4].classList.remove("sidebarSelect")}
    collection[0].classList.add("sidebarSelect")

	}

  if(position2.top >= 0 && position2.bottom <= window.innerHeight) {
		console.log('Element2 in view');
    if(collection[0].classList.contains("sidebarSelect") || collection[1].classList.contains("sidebarSelect") || collection[2].classList.contains("sidebarSelect") || collection[3].classList.contains("sidebarSelect") || collection[4].classList.contains("sidebarSelect")){
      collection[0].classList.remove("sidebarSelect")
      collection[2].classList.remove("sidebarSelect")
      collection[3].classList.remove("sidebarSelect")
      collection[4].classList.remove("sidebarSelect")}
    collection[1].classList.add("sidebarSelect")
	}
  if(position3.top >= 0 && position3.bottom <= window.innerHeight) {
		console.log('Element3 in view');
    if(collection[0].classList.contains("sidebarSelect") || collection[1].classList.contains("sidebarSelect") || collection[2].classList.contains("sidebarSelect") || collection[3].classList.contains("sidebarSelect") || collection[4].classList.contains("sidebarSelect")){
      collection[1].classList.remove("sidebarSelect")
      collection[0].classList.remove("sidebarSelect")
      collection[3].classList.remove("sidebarSelect")
      collection[4].classList.remove("sidebarSelect")}
    collection[2].classList.add("sidebarSelect")
	}
  if(position4.top >= 0 && position4.bottom <= window.innerHeight) {
		console.log('Element4 in view');
    if(collection[0].classList.contains("sidebarSelect") || collection[1].classList.contains("sidebarSelect") || collection[2].classList.contains("sidebarSelect") || collection[3].classList.contains("sidebarSelect") || collection[4].classList.contains("sidebarSelect")){
      collection[1].classList.remove("sidebarSelect")
      collection[2].classList.remove("sidebarSelect")
      collection[0].classList.remove("sidebarSelect")
      collection[4].classList.remove("sidebarSelect")}
    collection[3].classList.add("sidebarSelect")
	}
  if(position5.top >= 0 && position5.bottom <= window.innerHeight) {
		console.log('Element5 in view');
    if(collection[0].classList.contains("sidebarSelect") || collection[1].classList.contains("sidebarSelect") || collection[2].classList.contains("sidebarSelect") || collection[3].classList.contains("sidebarSelect") || collection[4].classList.contains("sidebarSelect")){
      collection[1].classList.remove("sidebarSelect")
      collection[2].classList.remove("sidebarSelect")
      collection[3].classList.remove("sidebarSelect")
      collection[0].classList.remove("sidebarSelect")}
    collection[4].classList.add("sidebarSelect")
	}

});
    
</script>

<?php get_footer(); ?>