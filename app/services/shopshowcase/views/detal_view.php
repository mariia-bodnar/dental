<link rel="stylesheet" type="text/css" href="<?= SERVER_URL . 'style/' . $_SESSION['alias']->alias . '/shopshowcase.css' ?>">
<link rel="stylesheet" type="text/css" href="<?= SERVER_URL . 'style/' . $_SESSION['alias']->alias . '/swiper.css' ?>">
<section class="library">
<pre><?php print_r($data); ?></pre>
    <div class="flex navig_title">
        <a href="<?= SITE_URL ?>"><?= $this->text('Головна', 0) ?></a>/
        <?php if ($_SESSION['alias']->breadcrumbs) { ?>
            <?php foreach ($_SESSION['alias']->breadcrumbs as $key => $value) { ?>
                <a href="<?= SITE_URL . $value ?>">
                    <?= $key ?></a>/
        <?php }
        }
        ?>
        <a href="<?= SITE_URL . $_SESSION['alias']->alias ?>"><?= $_SESSION['alias']->title ?></a>
    </div>
</section>
<section class="detal flex w100">
    <div class="w50">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper4">
            <div class="swiper-wrapper">
                <?php if ($_SESSION['alias']->images) {
                    foreach ($_SESSION['alias']->images as $img) { ?>
                        <div class="swiper-slide">
                            <img src="<?= IMG_PATH . $img->path ?>" alt="" />
                        </div>
                <?php }
                } ?>
            </div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper3">
            <div class="swiper-wrapper">
                <?php if ($_SESSION['alias']->images) {
                    foreach ($_SESSION['alias']->images as $img) { ?>
                        <div class="swiper-slide">
                            <img src="<?= IMG_PATH . $img->path ?>" alt="" />
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <div class="w50 info">
        <span class="products_title" id="firstWord"><?= $_SESSION['alias']->title ?></span>
        <?php if ($product) { ?>
            <span class="number"><?= $product->article_show ?></span>
            <?php if ($product->availability == '1') { ?>
                <span class="available"><?= $this->text(' В наявності', 0) ?></span>
            <?php } ?>
            <form action=" " class="quantity">
                <input type="number" min="1" max="9" step="1" value="1">
            </form>
            <?php if ($product->price) { ?>
                <span class="price"><?= $product->price ?></span>
        <?php }
        } ?>
    </div>
</section>
<?php $this->load->js([
    'assets/jquery-ui/ui/minified/jquery-ui.min.js',
    'assets/lightGallery/js/lightgallery.js',
    'assets/lightSlider/js/lightslider.js',
    'assets/lightGallery/modules/lg-thumbnail.min.js',
    'js/' . $_SESSION['alias']->alias . '/product.js',
    'js/' . $_SESSION['alias']->alias . '/swiper.js',
    'js/' . $_SESSION['alias']->alias . '/script.js'
]); ?>