<link rel="stylesheet" type="text/css" href="<?= SERVER_URL ?>style/library/library.css">
<pre><?php print_r($data); ?></pre>
<!-- Breadcrumbs -->
<section class="library">
    <div class="flex navig_title">
        <a href="<?= SITE_URL ?>"><?= $this->text('Головна', 0) ?></a>/
        <?php if ($_SESSION['alias']->name) { ?>
            <a href="<?= SITE_URL . $_SESSION['alias']->alias ?>" class="active"><?= $_SESSION['alias']->name ?></a>
        <?php } ?>
    </div>
</section>
<!-- Project Page-->
<section class="library">
    <div class='flex-block'>
        <?php if ($articles) {
            foreach ($articles as $article) { ?>
            <div class="article flex-item">
                <div class="image_wrapper">
                    <img src="<?= IMG_PATH .$article->photo ?>" alt="<?= $article->list ?>">
                </div>
                <a class="green"  href="<?=SITE_URL.$article->link?>"><?= $article->list ?></a>
                <p><?=$this->data->getShortText( html_entity_decode($article->text), 300)?></p>
                <a class="green_btn"  href="<?=SITE_URL.$article->link?>">читати далі</a>
            </div>
        <?php
            }
        } ?>
    </div>
</section>