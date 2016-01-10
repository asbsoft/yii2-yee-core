<?php

use yeesoft\widgets\assets\LanguageSelectorAsset;
use yii\helpers\ArrayHelper;
use yeesoft\helpers\LanguageHelper;

LanguageSelectorAsset::register($this);
?>

<div class="multilingual">
    <ul class="nav nav-pills">
        <?php foreach ($languages as $key => $lang) : ?>
            <?php if (LanguageHelper::getLangRedirect($language) == $key) : ?>
                <li role="language" class="active">
                    <a><?= ($display == 'code') ? $key : $lang ?></a>
                </li>
            <?php else: ?>
                <?php $link = Yii::$app->urlManager->createUrl(ArrayHelper::merge($params, [$url, 'language' => $key])); ?>
                <li role="language">
                    <a href="<?= $link ?>"><?= ($display == 'code') ? $key : $lang ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
