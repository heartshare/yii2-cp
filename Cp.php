<?php

namespace krok\cp;

use yii;

class Cp extends \yii\base\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'krok\cp\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->registerTranslations();
    }

    public function registerTranslations()
    {
        yii::$app->i18n->translations[$this->id] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@krok/cp/messages',
        ];
    }
}
