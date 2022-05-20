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
			background-color: #F5F8FA;
			display:grid;
			grid-template-columns: 1fr 1fr;
			align-items: center;
		}
	#splashimage h1{
		font-size: 4rem;
	}
	.swiper {
  width: 37vh;
    height: auto;
}
	.splash_text{
		display: grid;
		height:auto;
		align-items: center;
    justify-items: center;
	}

	#sort_bar1{
		background-color:black;
		height: 400px;
		display: grid;
		align-items: center;
    justify-items: center;

	}
	#sort_bar1 h1{
		color:white;
		font-size: 5rem;
	}

	</style>


	<section id="splashimage">
		<div class="splash_text">
  <h1>GUM + <br>VITAMIN <br>BOOST 
</h1></div>
  <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="https://ucarecdn.com/21559504-fb8f-4ef1-84f9-d4b00609a601/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2016.45.52.png" alt=""></div>
    <div class="swiper-slide"><img src="https://ucarecdn.com/103a14b8-1b2b-4986-97ee-d77280cf8ed2/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2014.34.32.png" alt=""></div>
    <div class="swiper-slide"><img src="https://ucarecdn.com/6dfe6abf-ff50-4566-93bd-d95bacf05b3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/EACE%20HEALTHY%20TEETH%20MOCKUP%20ISOLATED.jpg" alt=""></div>
    ...
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
</section>

<section id="sort_bar1">
	<h1>NEXT GENERATION CHEWING GUM </h1>

</section>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
 const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
    </script>

<?php get_footer(); ?>