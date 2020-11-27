<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_obat') ?>

    <?= $form->field($model, 'nama_obat') ?>

    <?= $form->field($model, 'kandungan_obat') ?>

    <?= $form->field($model, 'golongan_obat') ?>

    <?= $form->field($model, 'tglbeli_obat') ?>

    <?php // echo $form->field($model, 'tglkl_obat') ?>

    <?php // echo $form->field($model, 'harga_obat') ?>

    <?php // echo $form->field($model, 'hargajual_obat') ?>

    <?php // echo $form->field($model, 'stok_obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
