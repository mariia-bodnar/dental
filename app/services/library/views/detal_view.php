<link rel="stylesheet" type="text/css" href="<?= SERVER_URL ?>style/library/library.css">
<?php $all_ar = $this->load->function_in_alias('library', '__get_Articles'); ?>
<?php $all_g = $this->load->function_in_alias('library', '__get_Groups'); ?>
<section class="library">
	<div class="flex navig_title">
		<a href="<?= SITE_URL ?>"><?= $this->text('Головна', 0) ?></a>/
		<?php foreach ($all_ar as $ar) { ?>
			<?php if ($ar->group_name) { ?>
				<?php if ($ar->group_link) { ?>
					<?php if ($_SESSION['alias']->name == $ar->name) { ?>
						<a href="<?= SITE_URL .
										$ar->group_link ?>"><?= $ar->group_name ?></a>/
		<?php }
				}
			}
		} ?>
		<?php if ($_SESSION['alias']->name) { ?>
			<a href="<?= SITE_URL . $_SESSION['alias']->alias ?>" class="active"><?= $_SESSION['alias']->name ?></a>
		<?php } ?>
	</div>
</section>
<section class="library-detal">
<span class="products_title" id="firstWord"><?= html_entity_decode($_SESSION['alias']->list) ?></span>
	<!-- Swiper -->
	<div  class="library-detal flex">
	<?php if ($_SESSION['alias']->images) { ?>
		<div class="mySwiper_3 swiper flex-item">
			<div class="swiper-wrapper">

				<?php foreach ($_SESSION['alias']->images as $img) { ?>
					<div class="swiper-slide"><img src="<?= IMG_PATH . $img->path ?>" alt=""></div>
				<?php
				} ?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	<?php } ?>
	<?php if ($_SESSION['alias']->list) { ?>
		<div class="flex-item">	
			<?= html_entity_decode($_SESSION['alias']->text) ?>
			<?php if ($_SESSION['alias']->section) {
				foreach ($_SESSION['alias']->section as $section) { ?>
					<div>
						<span ><?= $section->title ?></span>
						<p><?= $section->value ?></p>
					</div>
			<?php }
			} ?>
		</div>
	<?php } ?>
	</div>
</section>