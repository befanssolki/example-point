<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Stelag */

$this->title = 'Update Stelag: ' . $model->id_stelag;
$this->params['breadcrumbs'][] = ['label' => 'Stelags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stelag, 'url' => ['view', 'id' => $model->id_stelag]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stelag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
