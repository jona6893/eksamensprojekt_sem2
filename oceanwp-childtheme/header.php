<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<?php wp_head(); ?>
</head>

<style> 
.burger-ikon{
	display: none;
}
.menulinks{
	display: flex;
	flex-direction: row;
	column-gap: 20px;
}

header {
	padding-inline: 5%;
	display: flex;
    flex-direction: row;
    height: 75px;
    align-items: center;
	justify-content: space-between;
}
header img{
	width: 125px;
}

.drop-down-menu{
	position: fixed;
	display: grid;
	background-color: #f1f1f1;
	z-index: 2;
}
.hidemenu{
	display:none;
}
.hover-mig:hover .hidemenu{
	display:grid;
}
.menu-ikoner{
	display:flex;
	column-gap: 10px;
    align-items: center;
}
.menu-user{
	width:16px;
	transform: translateY(-2px);
}
.menu-cart{
	width:22px;
	transform: translateY(-2px);
}
@media (max-width: 900px) {
	.burger-ikon{
	display: block;
	width: 50px;
	z-index: 999;
}
.logo{
	width: 100px;
}
.menulinks{
	    position: fixed;
    flex-direction: column;
    column-gap: 10px;
    width: 100vw;
    height: 100vh;
    background-color: #fff9f1;
    top: 0%;
    left: 100%;
    z-index: 998;
    margin-top: 30px;
    transition: 0.5s;
    padding-top: 5%;
    padding-left: 5%;
}

.burger-open{
	left:0%
}


}


</style>

<header>
	<div class="logo"><img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/eacelogo.png" alt="eace gum logo"></div>
	<div class="burger-ikon">
		<img src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/menu_FILL0_wght400_GRAD0_opsz48.png" alt="">
	</div>
	<div class="menulinks">
	<a href="">SHOP</a>
	<a href="">ABONNEMENTER</a>
	<div class="hover-mig"><a href="">BAG OM EACEGUM</a>
	<div class="drop-down-menu hidemenu">
		<a href="">PRODUKTION</a>
		<a href="">ANSVAR</a>
	</div></div>
	<a href="">VORES HISTORIE</a>
	<a href="">BLOG</a>
	
	<div class="menu-ikoner">
		<a href=""><img class="menu-user" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/user.png" alt=""></a>
		<a href=""><img class="menu-cart" src="https://victor-ly.dk/kea/10_eksamensprojekt/eacegum/wp-content/uploads/2022/05/cart.png" alt=""></a>
	</div>
	</div>	
	
</header>

<script>

let burgerikon = document.querySelector(".burger-ikon");
let slideout = document.querySelector(".menulinks");






burgerikon.addEventListener("click", () => {
	slideout.classList.toggle("burger-open")
});






console.log("yes this works ");



</script>