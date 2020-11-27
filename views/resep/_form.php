<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
use app\models\Obat;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Resep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-form">

    <?php $form = ActiveForm::begin(); ?>

	<!--?= Html::activeDropDownList($model, 'id_obat',
      ArrayHelper::map(Obat::find()->all(), 'id_obat', 'nama_obat')) ?-->

	<?php
        echo $form->field($model, 'id_obat')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Obat::find()->all(), 'id_obat', 'nama_obat'),
                'options' => ['placeholder' => 'Pilih Obat', 'multiple' => false],
            ])->label('Nama Obat');  
    ?>

    <?= $form->field($model, 'jumlah_obat')->textInput() ?>

    <?= $form->field($model, 'ket_obat')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
