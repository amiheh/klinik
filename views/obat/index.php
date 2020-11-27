<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Obat</h3>
            <div class="box-tools pull-right">
                <?= Html::a('Tambah Obat', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'nama_obat',
                    'kandungan_obat',
                    'golongan_obat',
                    //'tglkl_obat',
                    //'harga_obat',
                    //'hargajual_obat',
                    //'stok_obat',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>


</div>
