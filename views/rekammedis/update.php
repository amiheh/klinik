<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rekammedis */

$this->title = 'Update Rekammedis: ' . $model->id_rkmd;
$this->params['breadcrumbs'][] = ['label' => 'Rekammedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rkmd, 'url' => ['view', 'id' => $model->id_rkmd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekammedis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
