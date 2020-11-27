<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TarifSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tarif') ?>

    <?= $form->field($model, 'nama_tarif') ?>

    <?= $form->field($model, 'tarif_dokter') ?>

    <?= $form->field($model, 'tarif_asisten') ?>

    <?= $form->field($model, 'tarif_klinik') ?>

    <?php // echo $form->field($model, 'tarif_bhp') ?>

    <?php // echo $form->field($model, 'total_tarif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
