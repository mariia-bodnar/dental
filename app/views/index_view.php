<section class="mb-90">

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
<section class="products mb-90">
	<div class="products_title"><span class="color_red"><?= $this->text(
															'Акційні',
															0
														) ?></span><span><?= $this->text('Товари', 0) ?></span><a class="arrow"><?= $this->text(
																																	'Усі акційні товари',
																																	0
																																) ?><span></span></a></div>
	<div class="mySwiper_2 swiper h-440 w-100">
		<div class="swiper-wrapper">
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>

</section>
<section class="products mb-90">
	<div class="products_title"><span class="color_green"><?= $this->text(
																'Переглянуті',
																0
															) ?></span><span><?= $this->text('Товари', 0) ?></span><a class="arrow"><?= $this->text(
																																		'Усі акційні товари',
																																		0
																																	) ?><span></span></a></div>
	<div class="mySwiper_2 swiper h-440 w-100">
		<div class="swiper-wrapper">
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
			<div class="product swiper-slide"></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>

</section>
<section class="partners mb-90">
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