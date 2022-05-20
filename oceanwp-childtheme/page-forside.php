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

#splashimage{
	width: 100%;
	height: 90vh;
	display: grid;
    justify-items: center;
}

		.swiper {
  width: 100%;
  height: auto;
}
	</style>



	<main>
	<section id="splashimage">
	<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
	<img class="swiper-slide" src="https://ucarecdn.com/21559504-fb8f-4ef1-84f9-d4b00609a601/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2016.45.52.png" alt="">
	<img class="swiper-slide" src="https://ucarecdn.com/103a14b8-1b2b-4986-97ee-d77280cf8ed2/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2014.34.32.png" alt="">
	<img class="swiper-slide" src="https://ucarecdn.com/6dfe6abf-ff50-4566-93bd-d95bacf05b3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/EACE%20HEALTHY%20TEETH%20MOCKUP%20ISOLATED.jpg" alt="">
  
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

	</section>
	<section>

	</section>

	</main>


	<script type="module">
		import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

		const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
		

	</script>

<?php get_footer(); ?>