<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'tmptlahir_pasien') ?>

    <?= $form->field($model, 'tgllahir_pasien') ?>

    <?= $form->field($model, 'alamat_pasien') ?>


    <?php // echo $form->field($model, 'telepon_pasien') ?>

    <?php // echo $form->field($model, 'pekerjaan_pasien') ?>

    <?php // echo $form->field($model, 'usia_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
