<?php

namespace krok\cp\components;

use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class Controller extends \yii\web\Controller
{
    /**
     * @var string
     */
    public $layout = '@krok/cp/views/layouts/main';

    /**
     * @return array
     */
    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['post'],
                    ],
                ],
            ]
        );
    }
}
