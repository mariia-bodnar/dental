<?php
$products = $this->load->function_in_alias('shopshowcase', '__get_Products');
?>
<?php   $all_g = $this->load->function_in_alias('shopshowcase', '__get_Groups', -1); ?>
<pre><?php print_r($all_g); ?></pre>
<section class="">

	<!-- Swiper -->
	<div class="mySwiper swiper h-541 mt-0 ml_mr-auto mb-41 p-2">
		<div class="swiper-wrapper">
			<?php if ($_SESSION['alias']->images) {
				foreach ($_SESSION['alias']->images as $img) { ?>
					<div class="swiper-slide"><img src="<?= IMG_PATH . $img->path ?>" alt=""></div>
			<?php }
			} ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</section>

<section class="products ">

	<div class="products_title"><span id="firstWordinRed"><?= $this->text(
																'Акційні товари',
																0
															) ?></span><a class="arrow"><?= $this->text(
																							'Усі',
																							0
																						) ?> <?= $this->text(
																														'Акційні товари',
																														0
																													) ?><span></span></a></div>
	<div class="mySwiper_2 swiper h-440 w-100">
		<div class="swiper-wrapper">
			<?php if ($products) {
				foreach ($products as $product) {
					if ($product->old_price) { ?>

						<div class="product swiper-slide mb-30">
							<div class="akcia"><?= $this->text('Акція', 0) ?></div>
							<img src="<?= IMG_PATH . $product->photo ?>" alt="photo<?= $product->name ?>">
							<span class=""><?= $product->article_show ?></span>
							<a href="<?= $product->link ?>"><?= $product->name ?></a>
							<div><span>2 500 ₴</span><button>Купити</button></div>
						</div>

			<?php }
				}
			} ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>

</section>
<section class="products ">
	<div class="products_title"><span id="firstWord"><?= $this->text(
															'Переглянуті товари',
															0
														) ?></span><a class="arrow"><?= $this->text(
																						'Усі',
																						0
																					) ?> <?= $this->text(
																									'Переглянуті товари',
																									0
																								) ?><span></span></a></div>
	<div class="mySwiper_2 swiper h-440 w-100">
		<div class="swiper-wrapper">
			<?php if ($products) {
				foreach ($products as $product) { ?>
					<div class="product swiper-slide  mb-30">
						<img src="<?= IMG_PATH . $product->photo ?>" alt="photo<?= $product->name ?>">
						<span><?= $product->article_show ?></span>
						<a href="<?= $product->link ?>"><?= $product->name ?></a>
						<div><span>2 500 ₴</span><button>Купити</button></div>
					</div>
			<?php }
			} ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>

</section>
<section class="partners ">
	<div class="products_title"><span><?= $this->text(
											'Наші',
											0
										) ?></span><span class="color_green"><?= $this->text('Партнери', 0) ?></span></div>
	<div class="Partners swiper h-150 w-100">
		<?php if ($_SESSION['alias']->section) {
			foreach ($_SESSION['alias']->section as $sec) {
				if ($sec->name == 'partnery') { ?>
					<div class="imgs_partners swiper-wrapper">
						<?php foreach ($sec->images as $img) { ?>
							<div class="swiper-slide"><img src="<?= IMG_PATH . $img->path ?>" alt="<?= $img->title ?>" /></div>
			<?php
						}
					}
				}
			} ?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>

	</div>

</section>