<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rekammedis */

$this->title = 'Buat Rekam Medis';
$this->params['breadcrumbs'][] = ['label' => 'Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekammedis-create">
<div class="pegawai-create">
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Rekam Medis</h3>
        </div>
        <div class="box-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>
</div>
