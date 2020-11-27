<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekammedisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekammedis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rkmd') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'tgl_rkmd') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <?php // echo $form->field($model, 'id_dokter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
