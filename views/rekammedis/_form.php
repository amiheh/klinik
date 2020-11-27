<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Rekammedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekammedis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_rkmd')->widget(DatePicker::class, [
        'language' => 'id',
        'dateFormat' => 'yyyy-MM-dd',
        'options'=>[
            'class' => 'form-control',
            'style' => [
                'cursor'=>'pointer'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'keluhan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tindakan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'saran')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
