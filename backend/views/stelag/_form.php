<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Stelag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stelag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_stelag')->textInput() ?>

    <?= $form->field($model, 'number_polka')->textInput() ?>

    <?= $form->field($model, 'lvl')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
