<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
$this->title = 'Главная';
?>
<div class="site-index margint-100">
  <section class="text-center container">
    <div class="col-md-8 col-xs-12">
      <div class="list-group">
              <?php foreach ($offices as $office): ?>
             <!-- <a href="<//?=Url::to(['site/grp'])?>" class="list-group-item list-group-item-action p-4">Номер оффиса: <?= $office->number ?></a>-->
          <?=Html::a('Номер оффиса: '.$office->number, ['site/grp', 'id_office' => $office->id_office], ['class' => 'btn btn-warning m-3'])?>
              <?php endforeach; ?>
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <span class="d-block p-2 maincolor text-white mt-3"></span>
      <div class="card-body">
      <h3 class="card-title">Сегодня: <?php echo date("d.m.Y");?></h3>
      </div>
    <div class="mt-5">
      <?=$this->render('_card')?>
    </div>
  </div>
  </section>
</div>
