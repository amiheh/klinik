<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekammedisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dashboard Perawat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekammedis-index">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Rekam Medis</h3>
        </div>
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id_pasien',
                    'tgl_rkmd',
                    'keluhan:ntext',
                    'tindakan:ntext',
                    //'saran:ntext',
                    //'id_dokter',
                        [
                            'header' => 'Action',
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{action}',
                            'buttons' => [
                                'action' => function ($url,$model) {
                                                    $url = Url::to(['rekammedis/resep','id'=>$model->id_rkmd]);
                                                    return Html::a('Tulis Resep', $url, ['class'=>'btn btn-info']);
                                                }
                            ]
                        ],
                ],
            ]); ?>
        </div>
    </div>


</div>
