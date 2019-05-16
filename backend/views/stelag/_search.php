<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StelagSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stelag-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_stelag') ?>

    <?= $form->field($model, 'id_doc') ?>

    <?= $form->field($model, 'number_stelag') ?>

    <?= $form->field($model, 'number_polka') ?>

    <?= $form->field($model, 'lvl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
