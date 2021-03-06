<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'level_user') ?>

    <?= $form->field($model, 'nama_user') ?>

    <?php // echo $form->field($model, 'gender_user') ?>

    <?php // echo $form->field($model, 'alamat_user') ?>

    <?php // echo $form->field($model, 'telepon_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
