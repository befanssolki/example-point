<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Stelag */

$this->title = 'Create Stelag';
$this->params['breadcrumbs'][] = ['label' => 'Stelags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stelag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
