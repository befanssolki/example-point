<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Docs */

$this->title = 'Update Docs: ' . $model->id_doc;
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_doc, 'url' => ['view', 'id' => $model->id_doc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="docs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
