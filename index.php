<?php
$submitted = false;
if ( !empty($_GET) AND $_GET['thanks'] == '1') {
 $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Yulan Solutions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.7/parsley.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript">
	!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
	analytics.load("RzTe9OkMd3JpJjotgUHpFRckDOGrBh3C");
	analytics.page()
	}}();
	</script>

</head>
<body>
	<div class="row header">
		<div class="container">
			<div class="col-sm-7">
				<img src="images/logo.png" class="img-responsive" style="margin-left: 0;" alt=""> <br>
				<h1 class="bo">Développez votre business aux USA!</h1> <br>
				<div class="row boxes">
					<div class="col-sm-6">
						<div class="row tac greenback">
							<img src="images/r-strategie.png" width="80" height="80" class="img-responsive" alt="">
							<h2>Stratégie</h2>
						</div>
						<div class="row wb">
							<p>Vous ne savez pas par ou commencer?<br>Une courte consultation gratuite vous permettra de définir vos besoins et priorités. Consultation à long terme pour optimiser vos ventes et votre positionnement dans les moteurs de recherche.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row tac yellowback">
							<img src="images/r-ecommerce.png" width="80" height="80" class="img-responsive" alt="">
							<h2>eCommerce</h2>
						</div>
						<div class="row wb">
							<p>Comparer les choisissez différentes solutions selon votre budget. Accepter les cartes bleues et autres moyens de paiement. Augmentez votre taux de conversion par visiteurs grâce à des méthodes uniques et prouvées.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row tac marback">
							<img src="images/r-marketing.png" width="80" height="80" class="img-responsive" alt="">
							<h2>Marketing</h2>
						</div>
						<div class="row wb">
							<p>Affichez vos pubs sur Google, Twitter, Facebook, etc. Re-ciblez vos visiteurs sur leur site préférés. Envoyez des campagnes d'emailing intelligentes. Trouvez des prospects, influenceurs et affiliés</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row tac blueback">
							<img src="images/r-developpement.png" width="80" height="80" class="img-responsive" alt="">
							<h2>Développement</h2>
						</div>
						<div class="row wb">
							<p> problème avec votre site existant ? Nouvelle invention ou idée d'appli révolutionnaire ? Nous prenons en main le management de votre projet. Gagner du temps et libérez votre esprit !</p>
						</div>
					</div>
				</div> <br>
        <div class="row">
        <button onclick="location.href = '/site/nos-services';" class="consult" style="border-color: rgba(0, 0, 0, 0); background-color: deepskyblue;">Découvrez tous nos services</button>
        <!-- <a class="consult" style="border-color: rgba(0, 0, 0, 0); background-color: deepskyblue;" href="">Decouvrir tous nos services</a> -->
        </div>
				<!-- <div class="row boxes">
					<div class="col-sm-6"><img src="images/stratigie.png" class="img-responsive" alt=""></div>
					<div class="col-sm-6"><img src="images/ecommerce.png" class="img-responsive" alt=""></div>
					<div class="col-sm-6"><img src="images/marketing.png" class="img-responsive" alt=""></div>
					<div class="col-sm-6"><img src="images/development.png" class="img-responsive" alt=""></div>
				</div> -->
			</div>
			<div class="col-sm-5">
				<div class="row bluebox">
					<div class="tac">
						<h1 class="parlez">Parlez nous de votre projet!</h1>
						<p class="wh">Faites nous découvrir votre projet et étudions ensemble les options disponibles.</p> <br><br>
					</div>
					<form action="post.php" method="post" data-parsley-validate data-parsley-ui-enabled="false">
						<label for="name">Votre Nom</label><br>
						<input type="text" name="name" id="name"> <br>
						<label for="email" >Votre Email *</label><br>
						<input type="email" required name="email" id="email"> <br>
						<label for="phone">Numéro de téléphone</label><br>
						<input type="text" name="phone" id="phone"> <br>
						<label for="project" >Votre projet *</label><br>
						<select  name="project" required id="project" style="border-color: rgb(204, 204, 204); color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">
							<option value="" class=""></option>
							<option value="Stratégie">Stratégie</option>
							<option value="eCommerce">eCommerce</option>
							<option value="Marketing">Marketing</option>
							<option value="Développement">Développement</option>
							<option value="Besoins multiples">Besoins multiples</option>
						</select> <br>
						<button class="consult" style="border-color: rgba(0, 0, 0, 0); background-color: rgb(247, 148, 29);">Consultation Gratuite</button> <br><br>
						<p class="wh tac">
							Nous vous contacterons au plus vite! <br><br>

							Question rapide? <br>
							Contactez nous par téléphone ou texto au <br>
							+1 (818) 276-9866<br>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row whiteback">
		<div class="container">
			<div class="col-sm-7">
				<h2>Ils nous font confiance</h2> <br>
				<p>Que ce soit pour la création, la maintenance, le marketing ou le développement de sites web, logiciels et applications mobiles, Yulan est la référence pour tous les besoins numériques des Français aux Etats-Unis!</p> <br>
				<div class="row clients">
					<div class="row">
						<div class="col-xs-4"><img src="images/clients/fevrie@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/vortex@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/simplevisa@2x.png" class="img-responsive" alt=""></div>
					</div>
					<div class="row">
						<div class="col-xs-4"><img src="images/clients/minea@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/tpc@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/terramera@2x.png" class="img-responsive" alt=""></div>
					</div>
					<div class="row">
						<div class="col-xs-4"><img src="images/clients/bugproof@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/collectionroom@2x.png" class="img-responsive" alt=""></div>
						<div class="col-xs-4"><img src="images/clients/afm@2x.png" class="img-responsive" alt=""></div>
					</div> <br><br>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="row tar">
					<iframe frameborder="0" height="" scrolling="no" src="//maps.google.com/maps?q=11135 weddington st north hollywood 91601&amp;num=1&amp;t=m&amp;ie=UTF8&amp;z=14&amp;output=embed" width="200"></iframe> <br>
					<h3 style="color: #3399ff;">Yulan Solutions</h3><br>
					<h3 class="address" style="color: #696969;">
						11135 Weddington St #114<br>
						North Hollywood, CA 91601<br>
						<b>contact@yulan.us<br>
						+1 (818) 276-9866</b><br>
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="row fsi tac">
				<p>Nous sommes experts dans la plupart des solutions eCommerce existantes</p> <br>
				<div class="row">
					<div class="col-sm-offset-1 col-sm-2 col-xs-6">
						<img src="images/partners/prestashop.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-2 col-xs-6">
						<img src="images/partners/shopify.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-2 col-xs-6">
						<img src="images/partners/bigcommerce.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-2 col-xs-6">
						<img src="images/partners/amazon.png" class="img-responsive" alt="">
					</div>
					<div class="col-sm-2 col-xs-6">
						<img src="images/partners/magento.png" class="img-responsive" alt="">
					</div>
				</div> <br>
				<p>© Copyright Yulan 2015 - All rights reserved. </p> <br><br>
			</div>
		</div>
	</div>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var $_Tawk_API={},$_Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/55bd54ac35f6b1167cdd6efc/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

  <script src="//load.sumome.com/" data-sumo-site-id="2796a4d23fd6f721ebff53ff2e66bba77e3bb27b0d96bc78d98952b5013c3ab5" async="async"></script>

</body>
