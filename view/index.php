<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?= $page_title ?></title>
	<meta charset="utf8" />
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
	<meta name="viewport" content="width=device-width; maximum-scale=1; minimum-scale=1;" />
</head>
<body>
	<nav>
		<ul>
			<li><a href="#head"><img src="/data/misc/logo.jpg" /></a></li>
			<li><a href="#about">À propos</a></li>
			<li><a href="#gallery">Galerie</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<header id="head">
		<div id="header_content">
		<h1>Zaziss.com</h1>
		<blockquote>
			Si vous pouviez le dire avec des mots, il n'y aurait aucune raison de le peindre.<br /><span class="blockquote_author">Edward Hopper</span>
		</blockquote>
		</div>	
	</header>
	<section id="about">
		<h2>Qui suis-je ?</h2>
		<p>Salut, moi c'est Élisa Péron ! Je suis née à Besançon dans l’est de la France. Créatrice autodidacte, j’étudie actuellement les <strong>arts graphiques</strong> multimédia à Lyon. Je possède également un <abbr title="Certificat de Qualification Professionnelle Animateur Soigneur Assistant">CQP ASA</abbr> dans le milieu de l’équitation. Souhaitant devenir <strong>Game Artist</strong>, j’oriente mes études pour venir à Paris dans les mois à venir...</p>
		<div class="figure">
			<img src="data/misc/main_photo.png" alt="me!" width="300px" />
			<span>Histoire de remplir la page tu peux mettre ici ta photo (les recruteur/euses aiment savoir à qui iels ont affaire), ou un artwork particulier, ou une photo de ton cheval, ou d'un lampadaire, OU D'UN ABRIBUS PUTAIN.</span>
		</div>
		<p>Tout les travaux que vous verrez ici sont associés à l’identité <em>Zaziss</em>. Elle existe depuis 2010 pour signer toutes mes créations. Il s’agit également d’un personnage fictif. Enfin pas trop. Pour qu’elle crée, il suffit de lancer son fonctionnement avec un sweatshirt, une gaufre ou un pancake, et une connexion internet !</p>
	</section>
	<section id="gallery">
		<h2>Galerie</h2>
		<p>Ci-dessous mon travail blablabla. Merci de ne pas utiliser ces artworks sans m'en demander la permission ! Vous pouvez utiliser pour cela <a href="#contact">le formulaire de contact</a>.</p>
		<ul class="grid gallery_grid">
			<?php
			foreach($gallery as $element)
			{
				$element->build_list_element();
			}
			?>
		</ul>
	</section>
	<section id="contact">
		<h2>Contactez moi</h2>
		<?php 
		if(isset($_GET['err'])) if(in_array($_GET['err'], $form_errors))
		{ ?>
		<div class="form_info form_<?= ($_GET['err'] == 'success')?'success':'error' ?>">
		<?php
		switch($_GET['err'])
		{
			case 'success':
				echo 'Merci pour votre message ! Je vais l\'examiner et y répondre dès que possible.';
				break;
			case 'form':
				echo 'Le formulaire est incomplet et/ou incorrect. Merci de vérifier votre saisie avant de l\'envoyer.';
				break;
			case 'send':
				echo 'Une erreur est survenue pendant l\'envoi du message. Réessayez ou contactez moi directement sur les réseaux sociaux.';
				break;
			default:
				echo "Quelque-chose s'est mal passé. Réessayez ou envoyez moi directement un message sur les réseaux sociaux.";
		}
		?>
		</div>
		<?php }
		?>
		<form action="send.php" method="post">
			<fieldset>
				<legend>Renseignements</legend>
				<label for="form_pseudo">Nom</label><input type="text" name="pseudo" id="form_pseudo" required placeholder="Pseudo, prénom, etc." />
				<label for="form_email">Adresse e-mail</label><input type="email" name="email" id="form_email" required placeholder="votre@mail.com" />
			</fieldset>
			<fieldset>
				<legend>Message</legend>
				<select name="message_type">
					<option value="question">Question</option>
					<option value="com">Commission</option>
					<option value="collab">Collaboration</option>
					<option value="misc">Autre</option>
				</select>
				<textarea name="message_body" placeholder="Bonjour, "></textarea>
			</fieldset>
			<input type="submit" value="Envoyer" />
		</form>
		<p>Retrouvez moi aussi sur <a href="https://twitter.com/" title="@Zaziss">Twitter</a>, <a href="https://www.facebook.com/ZazissElisaPeron/" title="Zaziss">Facebook</a>, ou directement par mail via elisa.peron [arobase] zaziss [point] com !</p>
	</section>
	<footer>
		Artworks, charte graphique : Élisa Péron<br />
		Code : <a href="https://portfolio.intensifi.es/" title="Guillaume's portfolio">Guillaume JORANDON</a>
	</footer>

	<!-- JAVASCRIPT STUFF -->

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/jquery.magnific-popup.config.js"></script>
</body>
</html>
