<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\components\CategoryWidget;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, , shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="shortcut icon" type="image/x-icon" href="img/samsam.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <header class="header-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="menu">
          <div class="logo">
            <a href="<?= Url::home() ?>">
              <?= Html::img('@web/img/samsam.png', ['alt' => 'logo']) ?>
            </a>
          </div>
        <div class="nav-menu">
          <div class="col-xl-12 col-lg-12">
            <nav class="mainmenu mobile-menu">
              <ul class="menu1">
                <li>
                  <a href="#aboutus">О нас</a>
                </li>
                <li>
                  <menu>
                    <menuitem id="demo1">
                      <a>Меню</a>
                        <menu>
                          <menuitem><li><a href="#doc">Отзывы</a></li></menuitem>
                          <menuitem><li><a href="#pricelist">Прайс-лист</a></li></menuitem>
                          <menuitem><li><a href="#contacts">Контакты</a></li></menuitem>
                        </menu>
                      </menuitem>
                    </menu>
                  </li>
                <?php if(!Yii::$app->user->isGuest): ?>
                  <li class="out"><a href="<?= Url::to(['/admin']) ?>">Личный кабинет</a></li>
                  <li>
                    <a href="<?= Url::to(['/site/logout'])?>">
                      <?= Yii::$app->user->identity['username']?> (Выход)
                    </a>
                  </li>
                <?php else: ?>
                  <li class="auth"><a href="<?= Url::to(['site/login']) ?>">Вход</a></li>
                  <li><a href="<?=  Url::to(['site/signup']) ?>">Регистрация</a></li>
                    <?php endif; ?>
                  </ul>
                </nav>
              <div class="dropdown">
                <input type="checkbox" id="dropdown">
                  <label class="dropdown__face" for="dropdown">
                    <div class="dropdown__text">Категории</div>
                      <div class="dropdown__arrow"></div>
                    </label>
                  <ul class="dropdown__items">
                    <li>
                      <?= CategoryWidget::widget(['tpl' => 'category']) ?>    
                    </li>                  
                  </ul>
                </div>
              <svg>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                      <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="sticky-menu-container">
        <div class="inner-menu closed">
          <ul class="menu-list">
            <li class="menu-item">
              <a class="item-text" href="#aboutus">О нас</a>
            </li>
            <li class="menu-item">
              <a class="item-text" href="#doc">Отзывы</a>
            </li>
            <li class="menu-item">
              <a class="item-text" href="#pricelist">Прайс-лист</a>
            </li>
            <li class="menu-item">
              <a class="item-text" href="#contacts">Контакты</a>
            </li>
            <li class="menu-item">
              <a class="item-text" href="<?= Url::to(['site/login']) ?>">Вход</a>
            </li>
            <li class="menu-item">
              <a class="item-text" href="<?=  Url::to(['site/signup']) ?>">Регистрация</a>
            </li>
          </ul>
        </div>
      <div class="outer-button">
        <div class="icon-container">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 92 92" xml:space="preserve" class="ham hamRotate ham1"  onclick="this.classList.toggle('active')">
            <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
          </svg>
        </div>
      </div>
    </div>
  </header>
<?= $content; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>