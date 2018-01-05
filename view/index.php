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
			<li><a href="#about">About me</a></li>
			<li><a href="#gallery">Gallery</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
    </nav>
    <?php
    if($IN_CONSTRUCTION)
    {
    ?>
    <article id="special_wip">
        <div id="special_wip_content">
        <h2>Site under construction</h2>
        <p>This website isn't ready yet. Please come back later!</p>
        <ul class="social_links">
            <li><a href="https://twitter.com/Zaziss" title="Zaziss"><img src="assets/img/social_twitter.png" alt="Twitter" /></a></li>
            <li><a href="https://www.facebook.com/ZazissElisaPeron/" title="ZazissElisaPeron"><img src="assets/img/social_facebook.png" alt="Facebook" /></a></li>
            <li><a href="https://www.youtube.com/channel/UC2HT8mZdivLcCqHWrRLo-_g" title="Zaziss"><img src="assets/img/social_youtube.png" alt="Youtube" /></a></li>
            <li><a href="https://www.instagram.com/zaziss/" title="zaziss"><img src="assets/img/social_instagram.png" alt="Instagram" /></a></li>
            <li><a href="https://www.artstation.com/zaziss" title="zaziss"><img src="assets/img/social_artstation.png" alt="Artstation" /></a></li>
            <li><a href="https://zaziss.deviantart.com/" title="Zaziss"><img src="assets/img/social_deviantart.png" alt="Deviantart" /></a></li>
        </ul>
		<p>You can also reach my by mail: <strong>elisa.peron [at] zaziss [dot] com</strong>.</p>
        </div>
    </article>
    <?php }
    ?>
	<header id="head">
		<div id="header_content">
		<h1>Zaziss.com</h1>
		<blockquote>
			If you could say it in words, there would be no reason to paint it.<br /><span class="blockquote_author">Edward Hopper</span>
		</blockquote>
		</div>	
	</header>
	<section id="about">
		<h2>Who am I?</h2>
		<p>My name is Élisa Péron. I am a french <strong>digital artist</strong>. I am currently studying digital media and game art at <strong>ISART digital Paris</strong>, and I was studying graphic design, motion design, interactive design and game design at <strong>e-artsup Lyon</strong>. In 2015, I obtained a horse riding diploma, the <abbr title="Certificate of Professional Qualification as assitant, keeper and animator">CQP ASA</abbr>. I try to make illustration to improve my skills and offer commissions on internet. I plan to become a game artist in the future.</p>
        <p>I love animals in general and enjoy have pets! I am also a gamer, and a n00b who is trying her best...</p>
        <div class="figure">
			<img src="data/misc/main_photo.jpg" alt="Me!" width="300px" />
			<!-- <span>Legend</span> -->
		</div>
		<p>All artworks I have made are signed by "<em>Zaziss"</em>". This fictionnal identity was created in 2010 to companion my artistic trip. To make her create, you must give her an internet connexion, her hoodie, and a pancake or a waffle and that's it!</p>
	</section>
	<section id="gallery">
		<h2>Gallery</h2>
		<p>Some of my works. Please ask me explicit permission if you want to use any artwork. Feel free to <a href="#contact">contact me</a>.</p>
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
		<h2>Let's get in touch!</h2>
		<?php 
		if(isset($_GET['err'])) if(in_array($_GET['err'], $form_errors))
		{ ?>
		<div class="form_info form_<?= ($_GET['err'] == 'success')?'success':'error' ?>">
		<?php
		switch($_GET['err'])
		{
			case 'success':
				echo 'Thank you for your message! I\'ll read it and answer as soon as possible.';
				break;
			case 'form':
				echo 'The form is incomplete and/or incorrect. Please check what you typed and try again.';
				break;
			case 'send':
				echo 'The message wasn\'t send. Try again or try to contact me on social networks!';
				break;
			default:
				echo "Something bad happenned, I'm sorry. Try again or try to contact me on social networks!";
		}
		?>
		</div>
		<?php }
		?>
		<form action="send.php" method="post">
			<fieldset>
				<legend>Details</legend>
				<label for="form_pseudo">Name</label><input type="text" name="pseudo" id="form_pseudo" required placeholder="Pseudonym, name, etc." />
				<label for="form_email">Email address</label><input type="email" name="email" id="form_email" required placeholder="your-mail@sample.com" />
			</fieldset>
			<fieldset>
				<legend>Message</legend>
				<select name="message_type">
					<option value="question">Question</option>
					<option value="com">Commission</option>
					<option value="collab">Collaboration</option>
					<option value="misc">Other</option>
				</select>
				<textarea name="message_body" placeholder="Hi, "></textarea>
			</fieldset>
			<input type="submit" value="Send" />
        </form>
        <ul class="social_links">
            <li><a href="https://twitter.com/Zaziss" title="Zaziss"><img src="assets/img/social_twitter.png" alt="Twitter" /></a></li>
            <li><a href="https://www.facebook.com/ZazissElisaPeron/" title="ZazissElisaPeron"><img src="assets/img/social_facebook.png" alt="Facebook" /></a></li>
            <li><a href="https://www.youtube.com/channel/UC2HT8mZdivLcCqHWrRLo-_g" title="Zaziss"><img src="assets/img/social_youtube.png" alt="Youtube" /></a></li>
            <li><a href="https://www.instagram.com/zaziss/" title="zaziss"><img src="assets/img/social_instagram.png" alt="Instagram" /></a></li>
            <li><a href="https://www.artstation.com/zaziss" title="zaziss"><img src="assets/img/social_artstation.png" alt="Artstation" /></a></li>
            <li><a href="https://zaziss.deviantart.com/" title="Zaziss"><img src="assets/img/social_deviantart.png" alt="Deviantart" /></a></li>
        </ul>
		<p>You can also reach my by mail: <strong>elisa.peron [at] zaziss [dot] com</strong>.</p>
	</section>
	<footer>
		Webdesign, content : Élisa Péron<br />
		Code : <a href="https://portfolio.intensifi.es/" title="Guillaume's portfolio">Guillaume JORANDON</a>
	</footer>

	<!-- JAVASCRIPT STUFF -->

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/jquery.magnific-popup.config.js"></script>
</body>
</html>
