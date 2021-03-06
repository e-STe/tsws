<?php 
function refresh() {
	header('Refresh:0');
	exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>The Science WebSite</title>
        <meta name="keywords" content="sciences, tsws, tsws.ml, the science website, cours, apprendre facile" />
        <meta name="description" content="Tsws, site collaboratif de connaissances scientifiques, apprendre en s'amusant : D" />		<?php include 'scripts/includes/meta.html'; ?>
        <?php
			if($_POST) {
				if($_POST['content'] AND $_POST['user_name']) {
					$content = htmlspecialchars($_POST['content']);
					$username = htmlspecialchars($_POST['user_name']);
					$last_content = file_get_contents('scripts/php/comments.html');
					$comments = fopen('scripts/php/comments.html', 'w+');
					fwrite($comments, nl2br('<div class="comment"><h3>' . $username . '</h3>' . '<p>' . $content . '</p></div>') . "\n");
					fwrite($comments, $last_content);
					fclose($comments);
					refresh();
				} else {echo '<p style ="color: red;">Un champ ou plus n\'a pas été rempli.</p>';}
			}
        ?>  
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
						<li id="a_accueil"> <span> <a href="/">Accueil</a> </span> </li>
						<li id="a_electro"> <a href="#notnow">Electronique</a> </li>
						<li id="a_info"> <a href="#notnow">Informatique</a> </li>
						<li id="a_maths"> <a href="#notnow">Mathématiques</a> </li>
						<li id="a_meca"> <a href="#notnow">Mécanique</a> </li>
						<li id="a_prog"> <a href="#notnow">Programmation</a> </li>
						<li id="a_sciences"> <a href="/sciences/">Sciences</a> </li>
					<ul>
				</nav>			</header>
			
			<article>
				<h1>Un nouveau site : tsws !</h1>
				<p>Bienvenue sur « The Sciences Website », plus connu sous le nom de « TSWS ».
					Ce site est tout récent, il a été créé pour que vous perceviez les cours différemment et plus simplement,
					ainsi que pour vous divertir tout en enrichissant vos connaissances. En suivant attentivement et avec
					motivation les différents cours proposés sur le site, vous observerez votre niveau augmenter et vos
					difficultés diminuer. Vous pourrez voir et revoir tous les cours autant de fois que désiré. Nous vous
					souhaitons une agréable visite du site et nous restons à votre disposition pour toutes questions ou conseils,
					vous pouvez nous joindre par mail ou sur la page de commentaires commune du site.
					L'équipe TSWS.
				</p>
			</article>				
			<article>
				<h1>De nouveaux cours</h1>
				<p>Cours de mathématiques, de sciences, de programmation bien sûr, 
                    les cours vont arriver bientôt aussi, faut bien que le site ait une
					utilité ! Fin décembre les enfants fin décembre ...</p>			</article>
					
			<section id="promo_div">
				<div class="promo pr1"><p>HTML5 CSS3</p></div>
				<div class="promo pr2"><p>Monter un ordinateur</p></div>
				<div class="promo pr3"><p>Cuisiner une planquette de veau</p></div>
				<div style="clear: both; width: 100%;"></div>
			</section>
            <section id="comments">
                <h2>Commentaires</h2>
				<form action="" method="post">
					<input type="text" placeholder="Votre nom" name="user_name"/>
					<textarea name="content" placeholder="Ecrire un commentaire"></textarea>
					<input type="submit" value="Envoyer"/>
				</form>
            </section>
			
			<?php include 'scripts/php/comments.html';
			 include 'scripts/includes/footer.html'; ?> 
			<div id="notnow">
				<a href="#">X</a>
				<h1>Oops !</h1>
				<p>Pas encore de contenu ici ... Désolé, ça arrive !</p>
			</div>
		</div>		
	</body>
</html>