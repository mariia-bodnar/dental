<link rel="stylesheet" type="text/css" href="<?= SERVER_URL . 'style/' . $_SESSION['alias']->alias . '/shopshowcase.css' ?>">

<section>
	<div class="flex navig_title"><a href="<?= SITE_URL ?>"><?= $this->text('Головна', 0) ?>/</a><a href="<?= SITE_URL . $_SESSION['alias']->alias ?>"><?= $this->text(' Каталог товарів', 0) ?></a></div>
	<div class="products_title"><span class="color_green"><?= $this->text(
																'Каталог') ?></span><span><?= $this->text('Товарів') ?></span></div>
</section>
<section class=" flex product_page">
	<div class="w256  mr32 fillter_area">
		<form class="pos_rel w256" name="by" type="get" method="GET" action="<?= SITE_URL ?>search">
			<input class="search_input w256" id="" placeholder="<?= $this->text('Я шукаю...', 0) ?>" required name="by" type="search" data-toggle="" data-list="">
			<button class="btn_non " type="submit"><i class="search_icon curs_p"></i></button>
		</form>
		<div class="w256  mr32 fillter_card padd_10">
			<?php if (!empty($catalogAllGroups)) { ?>
				<?php foreach ($catalogAllGroups as $group) { ?>
					<?php if ($group->parent == "0" && $group->haveChild != "0") {
						$parent = $group; ?>
						<div class="padd_8 group">
							<input type="checkbox" class="custom-checkbox" id="group-<?= $parent->id ?>" name="" value="">
							<label for="group-<?= $parent->id ?>"><?= $parent->name ?></label>
						</div>

			<?php
					}
				}
			}
			?>
		</div>
	</div>
	<div class="flex-wrap catalog_products">
		<div class="product w28 mb-30">
			<img src="<?= IMG_PATH ?>товар.svg">
			<span>Артикул: 491-8870</span>
			<p>Брекет Damon Q2, паз 022
				на правый боковой резец верхней челюсти, стандартный торк</p>
			<div><span>2 500 ₴</span><button>Купити</button></div>
		</div>
		<div class="product w28 mb-30">
			<img src="<?= IMG_PATH ?>товар.svg">
			<span>Артикул: 491-8870</span>
			<p>Брекет Damon Q2, паз 022
				на правый боковой резец верхней челюсти, стандартный торк</p>
			<div><span>2 500 ₴</span><button>Купити</button></div>
		</div>
		<div class="product w28 mb-30">
			<img src="<?= IMG_PATH ?>товар.svg">
			<span>Артикул: 491-8870</span>
			<p>Брекет Damon Q2, паз 022
				на правый боковой резец верхней челюсти, стандартный торк</p>
			<div><span>2 500 ₴</span><button>Купити</button></div>
		</div>
		<div class="product w28 mb-30">
			<img src="<?= IMG_PATH ?>товар.svg">
			<span>Артикул: 491-8870</span>
			<p>Брекет Damon Q2, паз 022
				на правый боковой резец верхней челюсти, стандартный торк</p>
			<div><span>2 500 ₴</span><button>Купити</button></div>
		</div>
	</div>
</section>
<section id="catalog">