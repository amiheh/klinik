<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_user')->dropDownList(
        Yii::$app->helper->listLevelUser(),
        ['prompt'=>'Pilih Level User']
    ); ?>

    <?= $form->field($model, 'nama_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender_user')->radioList(
        Yii::$app->helper->listGenderUser()
    ); ?>

    <?= $form->field($model, 'alamat_user')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telepon_user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
    $this->registerCss("
        input[type='radio']
        {
            margin-left: 10px;
            margin-right: 5px;
        }"
    );
?>