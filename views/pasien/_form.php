<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmptlahir_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgllahir_pasien')->widget(DatePicker::class, [
        'language' => 'id',
        'dateFormat' => 'yyyy-MM-dd',
        'options'=>[
            'class' => 'form-control',
            'style' => [
                'cursor'=>'pointer'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'alamat_pasien')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telepon_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia_pasien')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
