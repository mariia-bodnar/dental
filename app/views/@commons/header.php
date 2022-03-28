<?php $all_g = $this->load->function_in_alias('shopshowcase', '__get_Groups', -1); ?>
<header class="container block pt_50">
    <div class="flex w100 align h40 upper_menu">
        <a class="mr_28 curs_p w265px" href="<?= SITE_URL ?>"><img src="<?= IMG_PATH ?>logo.svg" alt="logotype"> </a>
        <form class="search_block mr_28" name="by" type="get" method="GET" action="<?= SITE_URL ?>search">
            <input class="search_input" id="" placeholder="<?= $this->text('Я шукаю...', 0) ?>" required name="by" type="search" data-toggle="" data-list="">
            <button class="btn_non" type="submit"><i class="search_icon curs_p"></i></button>
        </form>
        <a class="flex w100 align gap_10 just_end decor_none" href="tel:<?= $this->text('phone-1', 0) ?>"><i class="phone_icon"></i><span class="curs_p header_tel"><?= $this->text('phone-1', 0) ?></span></a>
        <div class="flex flex_end gap_30 padd_10">
            <a><i class="user_icon curs_p"></i></a>
            <a href="<?php SITE_URL ?>cart"><i class="basket_icon curs_p"></a></i>
        </div>
    </div>
    <div class="mt_25 w100 bottom_menu">
        <ul class="flex w100 padd_0 align menu sp_beetween">
            <li class="btn flex mr_35"><span class="btn_i pl_35"></span><?= $this->text('Каталог товарів', 0) ?>
                <div class="container style_menu size-1 h-500 display_none">
                    <ul class=" catalog gap_15 padd_0">
                        <?php if ($all_g) {
                            foreach ($all_g as $group) { ?>
                                <?php if ($group->parent == 0 && !empty($group->haveChild)) { 
                                    $parent = $group;?>
                                    
                                    <li class="sp_beetween"><a href="<?=  $parent->link ?>"><?=  $parent->name ?></a><span class="flex_end">></span>
                                        <ul class="secondary_menu">
                                            <?php foreach ($all_g as $group) { ?>
                                                <?php if ($group->parent == $parent->id ) { ?>
                                                    <li class="text-left"><a href="<?= $group->link ?>"><?= $group->name ?></a></li>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>

                                    <?php  } elseif (empty($group->haveChild) && $group->parent == "0") { ?>
                                    <li class="text-left"><a href="<?= $group->link ?>"><?= $group->name ?></a></li>
                                <?php }
                                ?>
                            <?php }
                        } ?>
                    </ul>
                </div>
            </li>
            <li class="btn flex mr_45 "><span class="btn_i pl_35"></span><?= $this->text('Послуги', 0) ?>
                <div class="style_menu size-2 h-500 display_none">
                    <ul class="small gap_15 padd_0">
                        <li><a><?= $this->text('Сервіс 1', 0) ?></a></li>
                        <li><a><?= $this->text('Сервіс 1', 0) ?></a></li>
                    </ul>
                </div>
            </li>
            <li class="mr_25  "><a class="header_list_title"><?= $this->text('Акції', 0) ?></a></li>
            <li class="header_list_title mr_25 flex align gap_15"><?= $this->text('Клієнтам', 0) ?><i class="sign_icon"></i>
                <div class="style_menu size-2 h-500 display_none">
                    <ul class="small gap_15 padd_0">
                        <li><a href="<?= SITE_URL ?>delivery"><?= $this->text('Доставка і оплата', 0) ?></a></li>
                        <li><a href="<?= SITE_URL ?>about-us"><?= $this->text('Про компанію', 0) ?></a></li>
                        <li><a href="<?= SITE_URL ?>library/statti"><?= $this->text('Статті', 0) ?></a></li>
                        <li><a href="<?= SITE_URL ?>library/novyny"><?= $this->text('Новини', 0) ?></a></li>
                    </ul>
                </div>
            </li>
            <li class="mr_25  "><a class="header_list_title" href="<?= SITE_URL ?>contacts"><?= $this->text('Контакти', 0) ?></a></li>

        </ul>

    </div>
    <div class="menu_burger">
        <ul class="flex w100 sp_beetween align padd_0">
            <li>
                <div class="burger padd_8">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </li>
            <li class="w100">
                <form class="search_area mr_28" name="by" type="get" method="GET" action="<?= SITE_URL ?>search">
                    <input class="search_input" id="" placeholder="<?= $this->text('Я шукаю...', 0) ?>" required name="by" type="search" data-toggle="" data-list="">
                    <button class="btn_non" type="submit"><i class="search_icon curs_p"></i></button>
                </form>
            </li>
        </ul>
    </div>
    <div class="slide-menu">
        <div class="flex w100 sp_beetween align padd_0 "><a class="mr_28 curs_p w265px" href="<?= SITE_URL ?>"><img src="<?= IMG_PATH ?>logo.svg"></a><i class="close_icon curs_p padd_8"></i></div>
        <ul class="padd_0 aside_menu">
            <li>
                <div class="flex w100 sp_beetween align for_open_detal"><?= $this->text('Каталог товарів', 0) ?><i class="sign_icon padd_5 curs_p"></i></div>

                <ul class="open_menu">
                    <li class="">
                        <div class="flex w100 sp_beetween align for_open_detal"><span><?= $this->text('Товар 1', 0) ?></span><i class="sign_icon padd_5 curs_p"></i></div>
                        <ul class="open_detal_product">
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                            <li class=""><?= $this->text('Товар 1', 0) ?></li>
                        </ul>
                    </li>
                    <li class="">
                        <div class="flex w100 sp_beetween align for_open_detal"><?= $this->text('Товар 1', 0) ?><i class="sign_icon padd_5 curs_p"></i></div>
                    </li>
                    <li class="">
                        <div class="flex w100 sp_beetween align for_open_detal"><?= $this->text('Товар 1', 0) ?><i class="sign_icon padd_5 curs_p"></i></div>
                    </li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                    <li class=""><?= $this->text('Товар 1', 0) ?></li>
                </ul>
            </li>
            <li>
                <div class="flex w100 sp_beetween align for_open_detal"><?= $this->text('Послуги', 0) ?><i class="sign_icon padd_5 curs_p"></i></div>
                <ul class="open_menu">
                    <li><a><?= $this->text('Сервіс 1', 0) ?></a></li>
                    <li><a><?= $this->text('Сервіс 1', 0) ?></a></li>
                </ul>
            </li>

            <li class=""><a class=""><?= $this->text('Акції', 0) ?></a></li>
            <li>
                <div class="flex w100 sp_beetween align for_open_detal"><?= $this->text('Клієнтам', 0) ?><i class="sign_icon padd_5 curs_p"></i></div>
                <ul class="open_menu">
                    <li><a href="<?= SITE_URL ?>delivery"><?= $this->text('Доставка і оплата', 0) ?></a></li>
                    <li><a href="<?= SITE_URL ?>about-us"><?= $this->text('Про компанію', 0) ?></a></li>
                    <li><a href="<?= SITE_URL ?>library/statti"><?= $this->text('Статті', 0) ?></a></li>
                    <li><a href="<?= SITE_URL ?>library/novyny"><?= $this->text('Новини', 0) ?></a></li>
                </ul>
            </li>
            <li class=""><a class="" href="<?= SITE_URL ?>contacts"><?= $this->text('Контакти', 0) ?></a></li>

        </ul>
    </div>

</header>