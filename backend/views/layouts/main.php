<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\Bootstrap4Asset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<li class="text-white nav-link">Сибур-Архив</li>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar maincolor navbar-expand-md navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Личный кабинет', 'url' => ['/site/index']],
        ['label' => 'Профили', 'url' => ['/profile/index']],
        ['label' => 'Архивы', 'url' => ['/stelag/index']],
        ['label' => 'Документы', 'url' => ['/docs/index']],
        ['label' => '...', 'url' => ['/office/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ''
            . Html::beginForm(['/site/logout'], 'post')
            . Html::a('Выход (' . Yii::$app->user->identity->username . ')', ['/site/logout'])
            . Html::endForm();
    }


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container text-white">
      <div class="container-fluid text-center text-white text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-lg-9 mt-md-0 mt-3">
            <!-- Content -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit
              <br>
              sed do eiusmod tempor incididunt
            </p>
            <div class="row">

       <!-- Grid column -->
       <div class="col-md-5">
         <div class="mb-5">

           <!-- Facebook -->
           <img src="images/gerb.png" alt="" style="width: 50px;">
           <!-- Vk -->
         </div>
       </div>
       <!-- Grid column -->

     </div>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Grid column -->

          <div class="col-lg-3 mb-md-0 mb-3">
            <!-- Content -->
            <p>
              Россия, 636036, г. Северск Томской области
              <br>
              ул. Крупской, 17, каб. 212
            </p>
            <p>
              т. (3823) 780-311
              <br>
              факс (3823) 780-304
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
