<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resep */

$this->title = 'Buat Resep';
$this->params['breadcrumbs'][] = ['label' => 'Resep', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Resep</h3>
        </div>
        <div class="box-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>

</div>
