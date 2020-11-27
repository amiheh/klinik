<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kandungan_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglbeli_obat')->widget(DatePicker::class, [
        'language' => 'id',
        'dateFormat' => 'dd-MM-yyyy',
        'options'=>[
            'class' => 'form-control',
            'style' => [
                'cursor'=>'pointer'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'tglkl_obat')->widget(DatePicker::class, [
        'language' => 'id',
        'dateFormat' => 'dd-MM-yyyy',
        'options'=>[
            'class' => 'form-control',
            'style' => [
                'cursor'=>'pointer'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'harga_obat')->textInput() ?>

    <?= $form->field($model, 'hargajual_obat')->textInput() ?>

    <?= $form->field($model, 'stok_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
