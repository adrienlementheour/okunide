	<footer id='footer' role='contentinfo'>
		<div id='footer-partners'>
			<div class='container'>
				<h2 class='big'>Nos partenaires</h2>
			</div>
		</div>
		<div id='footer-menu'>
			<div class='container'>
				<div id='form-newsletter-footer'>
					<h2>S’inscrire à la newsletter</h2>
					<form id='newsletter'>
						<fieldset>
							<input type='email' name='search' placeholder='Votre adresse email...'><!--
							--><button>S'inscrire</button>
						</fieldset>
					</form>
				</div>
				<div id='company-menu'>
					<h2>Société</h2>
					<ul class='sous-menu'>
						<li>
							<a href='#'>À propos</a>
						</li>
						<li>
							<a href='#'>Fonctionnement</a>
						</li>
						<li>
							<a href='#'>Partenaires</a>
						</li>
					</ul>
				</div>
				<div id='help-menu'>
					<h2>Besoin d’aide ?</h2>
					<ul class='sous-menu'>
						<li>
							<a href='#'>Aide</a>
						</li>
						<li>
							<a href='#'>Vie privée et cookies</a>
						</li>
						<li>
							<a href='#'>Nous contacter</a>
						</li>
						<li>
							<a href='#'>Signaler un problème</a>
						</li>
					</ul>
				</div>
				<div id='logo-footer'>
					<a id='logo' class='vertical' href='<?php echo home_url( '/' ); ?>' title='Okunidé' rel='home'><span>Okunidé</span><img src='<?php echo get_template_directory_uri(); ?>/img/logo-vertical.png' srcset='<?php echo get_template_directory_uri(); ?>/img/logo-vertical.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo-vertical@2x.png 2x' alt='Okunidé'></a>
				</div>
			</div>
		</div>
		<div id='footer-bottom'>
			<div class='container'>
				<p>&copy;2016 |  Tous droits réservés</p>
				<ul>
					<li>
						<a href='#'>FAQ</a>
					</li><li>
						<a href='#'>Plan du site</a>
					</li><li>
						<a href='#'>Conditions générales de vente</a>
					</li><li>
						<a href='#'>Mentions légales</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	</body>
</html>
