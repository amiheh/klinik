<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tarif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_tarif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif_dokter')->textInput() ?>

    <?= $form->field($model, 'tarif_asisten')->textInput() ?>

    <?= $form->field($model, 'tarif_klinik')->textInput() ?>

    <?= $form->field($model, 'tarif_bhp')->textInput() ?>

    <?= $form->field($model, 'total_tarif')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
