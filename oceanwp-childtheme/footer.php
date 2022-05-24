<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

<style>
	footer#footer {
		background-color: #F2F2F2;
		padding-block: 32px;
	}

	footer section {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-evenly;
		gap: 32px;
	}

	footer :is(li, p) {
    margin-bottom: 8px;
	}
	
	.flex-items {
		display: flex;
		justify-content: space-between;
		gap: 12px;
	}

	.footer-content h2 {
		border-bottom: 1px solid var(--sort);
	}

	.footer-links {
		flex: 1 1 260px;
	}

	.links-container {
		margin: 0;
	}

	.links-container li {
		list-style: none;
	}

	.links-container a {
		text-decoration: underline;
	}

	.footer-contact {
		flex: 1 1 380px;
	}

	.contact-container {
		display: grid;
	}

	.contact-info {
		grid-row: 1/2;
		grid-column: 1/2;
	}

	.social-media {
		grid-row: 1/2;
		grid-column: 2/3;
		display: flex;
		flex-direction: row-reverse;
		gap: 24px;
	}

	.icon-facebook {
		background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/facebook.png");
		background-size: cover;
		aspect-ratio: 1 / 1;
		height: 28px;
		width: 28px;
		align-self: center;
		margin-bottom: 20px;
	}

	.icon-instagram {
		background-image: url("https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/instagram.png");
		background-size: cover;
		aspect-ratio: 1 / 1;
		height: 28px;
		width: 28px;
		align-self: center;
		margin-bottom: 20px;
	}

	.opening-time {
		grid-row: 2/3;
		grid-column: 1/3;
	}

	.footer-newsletter {
		flex: 1 1 380px;
	}

	.input-email {
		width: 100%;
		padding: 8px;
	}

	.btn-signup {
		padding: 8px 24px;
		border: none;
		background-color: var(--sort);
		color: white;
	}
</style>

<footer id="footer">
	<section class="max-width">
		<article class="footer-content footer-links">
			<h2>LINKS</h2>
			<ul class="links-container">
				<li><a href="#">Jobs</a></li>
				<li><a href="#">Butikker</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms & Conditions</a></li>
			</ul>
		</article>
		<article class="footer-content footer-contact">
			<h2>KONTAKT OS</h2>
			<div class="contact-container">
				<div class="contact-info">
					<p>Telefon: +45 22 15 28 95</p>
					<p>E-mail: hello@eace.dk</p>
				</div>
				<div class="social-media">
					<a class="icon-facebook" href="https://www.facebook.com/eacegum"></a>
					<a class="icon-instagram" href="https://www.instagram.com/eace_gum/"></a>
				</div>
				<div class="opening-time">
					<div class="flex-items">
						<p>Mandag - Fredag:</p>
						<p><i>09:00 - 18:00</i></p>
					</div>
					<div class="flex-items">
						<p>Lørdag:</p>
						<p><i>10:00 - 16:00</i></p>
					</div>
				</div>
			</div>
		</article>
		<article class="footer-content footer-newsletter">
			<h2>TILMELD VORES NYHEDSBREV</h2>
			<div>
				<p>Tilmeld dig og få mails når vi har spændende nyt, eksklusive tilbud og meget mere.</p>
				<div class="flex-items">
					<input class="input-email" type="text" placeholder="email">
					<button class="btn-signup">Tilmeld</button>
				</div>
			</div>
		</article>
	</section>
</footer>

