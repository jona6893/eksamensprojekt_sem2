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
    /* ---------- LOGIN ---------- */
      #first_section{
        display: grid;
        width: 100%;
        height: 100%;
        justify-items: center;
        gap: 20px;
        padding: 5%;
      }
      .de-to-felter{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 400px));
        width: 100%;
        justify-content: center;
        gap: 50px;
      }
      .login-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        width: 100%;
        height: auto;
        display: grid;
        justify-items: start;
        gap: 20px;
        padding: 5% 3%;
        min-height: 360px;
      }

      .login-felter{
        display: grid;
        gap: 20px;
        width:100%;
      }
      input{
        padding:2%;
        border: none;
        border-bottom: solid darkgrey 1px;
      }
      .login-knapper{
        display: flex;
        gap: 20px;
      }
      .knapper{
        background-color: black;
        color: white;
        border: none;
        width: 150px;
        height: 30px;
      }
    /* ---------- OPRET ---------- */
      .opret-container {
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
        width: 100%;
        height: auto;
        display: grid;
        justify-items: start;
        gap: 20px;
        padding: 5% 3%;
        min-height: 360px;
      }
      .opret-felter{
        display: grid;
        gap: 20px;
        width: 100%;
      }
  /* -------------------- DESKTOP -------------------- */

    @media (min-width: 750px) {

     
    }





</style>

  
<main>

  <section id="first_section">
    <h1>KONTO</h1>
    <div class="de-to-felter">
    <div class="login-container">
      <h1>Login på din Eacegum Konto</h1>
      <div class="login-felter">
        <input type="text" placeholder="Brugernavn">
        <input type="text" placeholder="Adgangskode">
      </div>
      <div class="login-knapper">
        <button class="knapper knap1">LOGIN</button>
      </div>
    </div>
    <div class="opret-container">
      <h1>Login på din Eacegum Konto</h1>
      <div class="opret-felter">
        <input type="text" placeholder="Fornavn">
        <input type="text" placeholder="Efternavn">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Adgangskode">
      </div>
      <div class="opret-knapper">
        <button class="knapper knap2">OPRET BRUGER</button>
      </div>
    </div>
    </div>
  </section>


</main>


<script>


</script>

<?php get_footer(); ?>