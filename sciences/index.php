<!DOCTYPE html>
<html>
	<head>
		<title>TSWS | Sciences</title>
		<meta name="description" content="Portail des cours de sciences de tsws" />
		<meta name="keywords" content="sciences, cours, tsws.ml, tsws, apprendre, portail science," />
		<link rel="stylesheet" type="text/css" href="/css/sciences.css" />
		<?php include '../scripts/includes/meta.html' ?>
	</head>
	<body>
		<div id="body">
			
			<header>
				<div id="logo"> 
					<div style="position: absolute; top: 0; left: 0; height: 185px; width: 100%; pointer-events: none; background-image: url(/images/neige.gif); z-index: 999;"></div>
					<h1>&nbsp;The Science Website</h1> <a href="http://tsws.ml"></a>
				</div>

				<nav id="menu">
					<img src="/images/icones/menu/trait.png" alt="menu" />
					<ul>
						<li id="a_accueil"> <a href="/">Accueil</a> </li>
						<li id="a_electro"> <a href="#notnow">Electronique</a> </li>
						<li id="a_info"> <a href="#notnow">Informatique</a> </li>
						<li id="a_maths"> <a href="#notnow">Mathématiques</a> </li>
						<li id="a_meca"> <a href="#notnow">Mécanique</a> </li>
						<li id="a_prog"> <a href="#notnow">Programmation</a> </li>
						<li id="a_sciences"> <span> <a href="/sciences/">Sciences</a> </span> </li>
					<ul>
				</nav>
			</header>
			
			<style> #a_sciences {background: url(/images/icones/border.png) repeat-x 0px 0px;}</style>
			
			<article>
				<h1>Sciences</h1>
				<p>Portail des Sciences ! Découvrez ici les tout nouveaux cours de sciences.</p>
			</article>
			
			<section id="promo_div">
				<div class="promo pr1"><p>Les atomes</p></div>
				<a href="tableau-periodique.php"><div class="promo pr2"><p>Tableau périodique</p></div></a>
				<div class="promo pr3"><p>Principe de fonctionnement d'une LEOlienne</p></div>
				<div style="clear: both; width: 100%;"></div>
			</section>

			<?php include '../scripts/includes/footer.html' ?>
			
			<div id="notnow">
				<a href="#">X</a>
				<h1>Oops !</h1>
				<p>Pas encore de contenu ici ... Désolé, ça arrive !
					Allez visiter les sciences en attendant ...
				</p>
			</div>
			
		</div>
	</body>
</html>