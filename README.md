Yii2 CP Panel
=================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist krok/yii2-cp "*"
```

or add

```
"krok/yii2-cp": "*"
```

to the require section of your `composer.json` file.

Configure
-----------------

Add to config file (config/web.php or common/config/main.php)

```
    'bootstrap' => [
        'cp',
    ],
```

```
    'modules' => [
        'cp' => [
            'class' => 'krok\cp\Cp',
            'modules' => [
            ],
        ],
    ],
```

Add to config file (config/params.php or common/config/params.php)

```
    'nav' => [
        [
            'label' => ['category' => 'cp', 'context' => 'Administration'],
            'items' => [
            ],
        ],
    ],
```
