<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OfficeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="office-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_office') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'number_doc') ?>

    <?= $form->field($model, 'count_places') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
