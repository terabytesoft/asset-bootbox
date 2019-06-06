<p align="center">
    <a href="https://github.com/terabytesoft/asset-bootbox" target="_blank">
        <img src="https://lh3.googleusercontent.com/DqmCbItYtxf5qhGk1WwD_RO16CF9wiQ_b3tB28qFlMD8Nv6xTpj9u-UB8LQlYz9DbkdG6-YAaY54K2bWv-j1Chg9lZEyuYDOC6t-qhcwOvDTxnF1uePU7KGvuKLVec5JkTsw7rQM=w2400" height="150px;">
    </a>
    <h1 align="center">Asset BootBox</h1>
</p>
<p align="center">
    <a href="https://packagist.org/packages/terabytesoft/asset-bootbox" target="_blank">
        <img src="https://poser.pugx.org/terabytesoft/asset-bootbox/v/unstable" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoft/asset-bootbox" target="_blank">
        <img src="https://travis-ci.org/terabytesoft/asset-bootbox.svg?branch=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoft/asset-bootbox/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoft/asset-bootbox/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoft/asset-bootbox/?branch=master" target="_blank">
         <img src="https://scrutinizer-ci.com/g/terabytesoft/asset-bootbox/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
         <img src="https://scrutinizer-ci.com/g/terabytesoft/asset-bootbox/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoft/asset-bootbox/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/1da0f2c92423f3603ee2/maintainability" alt="Maintainability">
    </a>
    <a href="https://github.styleci.io/repos/187356337">
        <img src="https://github.styleci.io/repos/187356337/shield?branch=master" alt="StyleCI">
    </a>		
</p>

</br>

<p align="center">
    <img src="https://lh3.googleusercontent.com/2I6_c5DTJHO0Lbd2OastgBiyS9flFoVWtY4VKra947xTOKL0-eqqyBCpS6ffCNuetokAoIjjiHqiTbUfesXKxHJQRz67j56a7PDZKksUjhgav7HMbUVojJJ4j6Gtf2UbkWAbFrW7=w2400" height="100px;">
</p>

### **DIRECTORY STRUCTURE:**

```
config/             contains extension configurations
docs/               contains documentation extension
src/
  Assets/           contains assets extension
    Js/             contains js custom extension
tests/              contains tests codeception for extension
vendor/             contains dependent 3rd-party packages
```

### **REQUIREMENTS:**

- The minimum requirement by this project template that your Web server supports:
    - PHP 7.2 or higher.
    - NPM [Installation](https://nodejs.org/en/download/)

### **INSTALLATION:**

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this extension using the following command composer:

~~~
composer require terabytesoft/asset-bootbox '^0.0.1@dev'
~~~

or add composer.json:

~~~
"terabytesoft/asset-bootbox":"^0.0.1-dev"
~~~

### **USAGE:**

~~~
<?php

\TerabyteSoft\Assets\BootBox\BootBoxAsset::register($this);

echo Yiisoft\Yii\Bootstrap4\Html::a(
    'Delete',
    '#',
    [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]
);
~~~

### **RUN TESTS CODECEPTION:**

~~~
$ cd vendor/terabytesoft/asset-bootbox
$ composer update --prefer-dist -vvv
$ vendor/bin/codecept run
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**
[![License](https://poser.pugx.org/terabytesoft/asset-bootbox/license)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoft/asset-bootbox/downloads)](https://packagist.org/packages/terabytesoft/asset-bootbox)
