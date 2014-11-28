<?php

namespace krok\cp;

use Yii;

class Cp extends \yii\base\Module implements \yii\base\BootstrapInterface
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

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules(
            [
                $this->id => $this->id,
                '<language:\w+\-\w+>/' . $this->id => $this->id,
            ],
            false
        );
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations[$this->id] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@krok/cp/messages',
        ];
    }
}
