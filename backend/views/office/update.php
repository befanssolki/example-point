<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Office */

$this->title = 'Update Office: ' . $model->id_office;
$this->params['breadcrumbs'][] = ['label' => 'Offices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_office, 'url' => ['view', 'id' => $model->id_office]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="office-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
