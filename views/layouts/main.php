<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Font Awesome -->
    <link type="text/css" media="all" href="/web/webmaster/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Libs CSS -->
    <link type="text/css" media="all" href="/web/webmaster/assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Optionally add helpers - button and/or media -->
    <link rel="stylesheet" href="/web/webmaster/assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <!-- Add fancyBox main CSS files -->
    <link rel="stylesheet" type="text/css" href="/web/webmaster/assets/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="/web/webmaster/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/web/webmaster/assets/css/slider.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="/web/webmaster/assets/css/owl.theme.css">
    <!-- Animate CSS -->
    <link type="text/css" media="all" href="/web/webmaster/assets/css/animate.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="/web/webmaster/assets/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="/web/webmaster/assets/css/stickup.css" />
    <link rel="stylesheet" type="text/css" href="/web/webmaster/assets/css/component.css" />
    <link type="text/css" media="all" href="/web/webmaster/assets/css/contact.form.css" rel="stylesheet" />
    <link type="text/css" media="all" href="/web/webmaster/assets/css/style.css" rel="stylesheet" />
    <!-- Switcher CSS -->
    <link type="text/css" media="all" href="/web/webmaster/assets/css/switcher.css" rel="stylesheet" />
    <link href="/web/webmaster/assets/css/colour-scheme/color-blue.css" rel="stylesheet" type="text/css" data-color="color-blue" media="all" id="stylesheet-new">
    <!-- Responsive CSS -->
    <link type="text/css" media="all" href="/web/webmaster/assets/css/respons.css" rel="stylesheet" />
   <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="/web/webmaster/assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/web/webmaster/assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/web/webmaster/assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" href="/web/webmaster/assets/img/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="/web/webmaster/assets/img/favicons/favicon.png" />
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>

</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>