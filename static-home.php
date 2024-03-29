<?php include(dirname(__FILE__) . '/header-homepage.php'); ?>

	<main class="main">

		<?php $plxShow->staticContent(); ?>

		<header class="header">
			<div class="container">
				<div class="grid">
					<div class="col sml-12 med-6 text-center">
						<h1 class="heading-small">Blog ou CMS à l'Xml</h1>
						<h2 class="h5">Créez un site Web performant en toute simplicité</h2>
						<img alt="Logo PluXml" src="<?php $plxShow->template(); ?>/img/plx-logo-bleu.png">
						<p>
							<a href="https://www.pluxml.org/download/pluxml-latest.zip" title="Télécharger PluXml"  class="button blue">Télécharger</a>
							<a href="https://demo.pluxml.org/" title="Site de démonstration de PluXml" class="button blue">Démo</a>
						</p>
						<p>
							<a href="https://www.pluxml.org/download/changelog.txt" class="h6">Changelog</a>
						</p>
					</div>
					<div class="col sml-12 med-6">
						<img class="img-border-1" src="<?php $plxShow->template(); ?>/img/plx-home-laptop-300px.png" alt="PluXml">
					</div>
				</div>
			</div>
		</header>

		<section class="section-1">
			<div class="container">
				<div class="grid">
					<div class="col sml-12 med-4 text-center">
						<strong>Aucune base de données</strong>
						<p>
							Toutes les données sont stockées dans des fichiers xml. Une simple copie de fichiers permet de déplacer votre site sur une clé usb, ce qui le rend complètement portable.
						</p>
					</div>
					<div class="col sml-12 med-4 text-center">
						<strong>Collaboratif</strong>
						<p>
							5 profils avec des niveaux d'autorisations différents. Pour la famille, les amis, une entreprise, PluXml trouvera sa place.
						</p>
					</div>
					<div class="col sml-12 med-4 text-center">
						<strong>Personnalisable</strong>
						<p>
							PluXml s'habille suivant vos envies pour que votre site soit à votre image. Etendez votre PluXml sans aucune ligne de programmation en ajoutant facilement des nouvelles fonctionnalités.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section-2">
			<div class="container">
				<div class="grid">
					<div class="col sml-12 med-6">
						<img class="img-border-2" src="<?php $plxShow->template(); ?>/img/plx-home-tablet-smartphone-300px.png" alt="PluXml">
					</div>
					<div class="col sml-12 med-6">
						<strong>Principales caractéristiques</strong>
						<ul class="unstyled-list">
							<li>Aucune base de données requise</li>
							<li>Portable sur clé usb</li>
							<li>Multi-utilisateurs avec des niveaux d'autorisations différents</li>
							<li>Pages statiques, catégories, gestion des tags, archives</li>
							<li>Gestion des commentaires</li>
							<li>Gestionnaire de médias : images, documents</li>
							<li>Flux Rss des articles, commentaires, tags, catégories</li>
							<li>Traduit en 11 langues (français, allemand, anglais, espagnol, italien, néerlandais, occitan, polonais, portugais, roumain, russe)</li>
							<li>Thèmes personnalisables (supporte les thèmes pour appareils mobiles et smartphones: iphone, blackberry, pocket-pc...)</li>
							<li>Plugins</li>
							<li>Réécriture d'urls</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="section-1">
			<div class="container">
				<div class="grid">
					<div class="col sml-12 med-6">
						<strong>Pré-requis</strong>
						<ul class="unstyled-list">
							<li>Serveur Apache, Nginx ou Lighttpd</li>
							<li>PHP 7.2 ou supérieur</li>
							<li>Librairie GD pour la gestion des images</li>
							<li>Fonction php d'envoi d'email autorisée (non obligatoire)</li>
						</ul>
						<strong>Procédure d'installation</strong>
						<ul class="unstyled-list">
							<li>Récuperez l'archive téléchargeable sur cette page et dézippez la à la racine de votre site</li>
							<li>Connectez-vous à votre site et suivez la procédure d'installation affichée à l'écran</li>
						</ul>
						<strong>Mise à jour d'une version existante de PluXml</strong>
						<ul class="unstyled-list">
							<li><strong>IMPORTANT:</strong> Sauvegardez le dossier data de votre PluXml</li>
							<li>Récuperez l'archive téléchargeable sur cette page et dézippez la à la racine de votre site de manière à écraser les fichiers existants</li>
							<li>Connectez-vous à votre site et suivez la procédure de mise à jour affichée à l'écran</li>
						</ul>
					</div>
					<div class="col sml-12 med-6">
						<img src="<?php $plxShow->template(); ?>/img/plx-home-admin-desktop-mobile-300px.png" alt="PluXml">
					</div>
				</div>
			</div>
		</section>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>