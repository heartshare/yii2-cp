<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use krok\language\widgets\LanguageWidget;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin(
        [
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]
    );
    echo LanguageWidget::widget(
        [
            'options' => ['class' => 'navbar-nav navbar-right'],
        ]
    );
    echo Nav::widget(
        [
            'options' => ['class' => 'navbar-nav navbar-left'],
            'items' => [
                [
                    'label' => yii::t('cp', 'Administration'),
                    'items' => [
                        ['label' => yii::t('language', 'Language'), 'url' => ['/cp/language']],
                    ],
                ]
            ],
        ]
    );
    NavBar::end();
    ?>
    <div class="container">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; NSign <?= date('Y') ?></p>

        <p class="pull-right">
            <?=
            Yii::t(
                'yii',
                'Framework {version_core} CP {version_cmf}',
                [
                    'version_core' => Yii::getVersion(),
                    'version_cmf' => '1.0',
                ]
            ) ?>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
