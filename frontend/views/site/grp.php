<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
$this->title = 'Документы';
?>
<section class="text-center container margint-100">
<div class="col-md-8 col-xs-12">
  <input class="form-control search mb-2" type="text" placeholder="Поиск по архивам" aria-label="Search">
  <!--<button class="btn btn-outline-primary">Дневное</button>
  <button class="btn btn-outline-primary">Вечернее</button>-->
  <span class="d-block mt-3 text-center maincolor text-white">Офис № <?=$model->number?></span>
  <div class="ml-3 mt-1 row">
    <button class="btn btn-warning"><a class="text-white" href="#">Номер стелажа: <?=$model->stelag->id_stelag?></a></button><br>

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
