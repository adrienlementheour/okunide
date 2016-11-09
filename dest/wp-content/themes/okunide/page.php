<?php get_header(); ?>
	<div class='container'>
		<?php if ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		
		<?php else : ?>
					
			<h1>404</h1>

		<?php endif; ?>
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
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
								Lampadaire Faces		
							</div>
							<div class='product-shop'>
								Colonel
							</div>
						</div>
						<div class='product-price'>
							595,00 €
						</div>
						<svg class='icon arrow-product'><use xlink:href='#icon-arrow-right'/></svg>
					</div>
				</li>
			</ul>
		</div>
	</div>

<?php get_footer(); ?>