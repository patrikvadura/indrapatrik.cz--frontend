<header id="header" class="header">
    <div class="wrap">
        <a href="<?= $homePath ?>" class="logo">
            <img src="<?= $logo ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <ul class="navigation">

            <?php if ( $links ):?>
                <?php foreach ( $links as $item ):?>

                    <li>
                        <?php if ( $item->link ):?>

                            <a
                                href="<?= $item->link ?>"
                                class="<?= $item->class, (substr($_SERVER['REQUEST_URI'], 1) == $item->link) ? "active" : "" ?>"
                                target="<?=( $item->target == true ) ? "_blank" : "_self" ?>">
                                <?= $item->title ?>
                            </a>

                        <?php else:?>

                            <span>
                                <?= $item->title ?>
                            </span>

                        <?php endif; ?>
                    </li>

                <?php endforeach; ?>
            <?php endif; ?>

        </ul>
    </div>
</header>
