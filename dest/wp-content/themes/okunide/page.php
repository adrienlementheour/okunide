<?php get_header(); ?>
	<div class='container'>
		<?php if ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		
		<?php else : ?>
					
			<h1>404</h1>

		<?php endif; ?>
	</div>

	<div id='bloc-top'>
		<div class='container'>
			<h1>Vous cherchez un cadeau original&nbsp;? Vous <s class='color-black'>n</s>’avez <span class='color-black'>okunidé</span>&nbsp;!</h1>
			<div class='bloc-search'>
				<form class='form-search'>
					<fieldset>
						<input type='radio' name='gender' value='homme' checked>Homme
						<input type='radio' name='gender' value='femme'>Femme
					</fieldset>
					<fieldset>
						<select name='select'>
						  <option value='value1'>Valeur 1</option> 
						  <option value='value2' selected>Valeur 2</option>
						  <option value='value3'>Valeur 3</option>
						</select>
					</fieldset>
					<fieldset>
						<select name='select'>
						  <option value='value1'>Valeur 1</option> 
						  <option value='value2' selected>Valeur 2</option>
						  <option value='value3'>Valeur 3</option>
						</select>
					</fieldset>
					<a href='#'>Plus de critères</a>
					<fieldset>
						<button class='btn'>C'est parti</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
	<div class='wrapper-products'>
		<div class='container'>
			<ul class='list-products'>
				<li class='product large'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Voir la fiche produit</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
				<li class='product'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Aller sur le site marchand</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
				<li class='product'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Voir la fiche produit</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
				<li class='product'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Aller sur le site marchand</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
				<li class='product'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Voir la fiche produit</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
				<li class='product large'>
					<div class='img-product'>
						<img src='<?php echo get_template_directory_uri(); ?>/img/horloge.png'>
						<div class='btn-product'>
							<a href='#' class='btn btn-invert'>Aller sur le site marchand</a>
						</div>
					</div>
					<div class='desc-product'>
						<div class='name-shop'>
							<div class='product-name'>
								Soso Wall Clock		
							</div>
							<div class='product-shop'>
								Lemnos
							</div>
						</div>
						<div class='product-price'>
							595&nbsp;€
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
			</ul>
		</div>
		<div class='wrapper-pagination'>
			<div class='container'>
				<ul class='pagination'>
					<li class='active'>
						<a href='#'><svg><use xlink:href='#icon-arrow-left'/></svg></a>
					</li><li>
						<a href='#'>1</a>
					</li><li class='active'>
						<a href='#'>2</a>
					</li><li>
						<a href='#'>3</a>
					</li><li class='active'>
						<a href='#'><svg><use xlink:href='#icon-arrow-right'/></svg></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>