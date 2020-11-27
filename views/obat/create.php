<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */

$this->title = 'Tambah Obat';
$this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-create">
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Obat</h3>
        </div>
        <div class="box-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
        </div>
    </div>
</div>
