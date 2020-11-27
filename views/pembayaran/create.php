<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */

$this->title = 'Transaksi Pembayaran';
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-create">
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Pembayaran</h3>
        </div>
        <div class="box-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>

</div>
