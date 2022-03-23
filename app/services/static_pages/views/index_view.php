<link rel="stylesheet" type="text/css" href="<?= SERVER_URL ?>style/static_pages/static_pages.css">

<section class="static_page">
    <div class="flex navig_title">
        <a href="<?= SITE_URL ?>"><?= $this->text('Головна', 0) ?></a>/
        <?php if ($_SESSION['alias']->alias == 'contacts') { ?>
            <a href="<?= SITE_URL . $_SESSION['alias']->alias ?>" class="active"><?= $this->text('Контакти', 0) ?></a>
        <?php } ?>
        <?php if ($_SESSION['alias']->alias == 'about-us') { ?>
            <a href="<?= SITE_URL . $_SESSION['alias']->alias ?>" class="active"><?= $this->text('Про компанію', 0) ?></a>
        <?php } ?>
        <?php if ($_SESSION['alias']->alias == 'delivery') { ?>
            <a href="<?= SITE_URL . $_SESSION['alias']->alias ?>" class="active"><?= $this->text('Доставка та оплата', 0) ?></a>
        <?php } ?>
    </div>
</section>
<?php if ($_SESSION['alias']->alias == 'delivery') { ?>
    <section class="delivery_page">
        <?php if ($_SESSION['alias']->section) { ?>
            <?php foreach ($_SESSION['alias']->section as $sec) { ?>
                
<div>
    <span class="green "><?= $sec->title ?></span>
    <?= html_entity_decode($sec->value) ?>
</div>

        <?php }
        } ?>
    </section>
<?php } else { ?>


    <section class="static_page sect_padd">
        <div class="media_display w100">
            <?php if ($_SESSION['alias']->images) { ?>
                <?php foreach ($_SESSION['alias']->images as $image) { ?>
                    <?php if ($_SESSION['alias']->alias == 'contacts') { ?>
                        <div class="w50 photo_map"><img class="sp_photo " src="<?= IMG_PATH . $image->path ?>" alt="<?= $image->title ?>"></div>
                    <?php } else { ?>
                        <div class="w50 "><img class="sp_photo " src="<?= IMG_PATH . $image->path ?>" alt="<?= $image->title ?>"></div>
            <?php }
                }
            } ?>
            <div class="w50">
                <span class="products_title" id="firstWord"><?= $_SESSION['alias']->list ?></span>
                <?php if ($_SESSION['alias']->section) { ?>
                    <div class="grid-block">
                        <?php foreach ($_SESSION['alias']->section as $sec) { ?>
                            <div class="grid-item">
                                <span><?= $sec->title ?></span>
                                <div class="grid_text"><?= html_entity_decode($sec->value) ?></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <?= $_SESSION['alias']->text ?>

                <?php } ?>
            </div>
            <?php if ($_SESSION['alias']->images) { ?>
                <?php foreach ($_SESSION['alias']->images as $image) { ?>
                    <?php if ($_SESSION['alias']->alias == 'contacts') { ?>
                        <div class="w50 n-display"><img class="sp_photo " src="<?= IMG_PATH . $image->path ?>" alt="<?= $image->title ?>"></div>
                    <?php } else { ?>
                        <div class="w50 company"><img class="sp_photo " src="<?= IMG_PATH . $image->path ?>" alt="<?= $image->title ?>"></div>
            <?php }
                }
            } ?>
        </div>
    </section>
<?php } ?>