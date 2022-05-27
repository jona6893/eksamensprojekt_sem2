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
    /* ---------- SECTION1 ---------- */
      #first_section{
        width: 100%;
        height: 100vh;
      }
      .login-container {
        background-color: #78c8fc;
        width: 75%;
        height: auto;
        display: grid;
        justify-items: center;
        gap: 20px;
      }

      .login-felter{
        display: grid;
        gap: 20px;
      }
  /* -------------------- DESKTOP -------------------- */

    @media (min-width: 750px) {

     
    }





</style>

  
<main>

  <section id="first_section">
    
    <div class="login-container">
      <h1>Login på din Eacegum Konto</h1>
      <div class="login-felter">
        <input type="text">
        <input type="text">
      </div>
      <div class="login-knapper">
        <button class="knap1">LOGIN</button>
        <button class="knap1">OPRET BRUGER</button>
      </div>
    </div>

  </section>


</main>


<script>


</script>

<?php get_footer(); ?>