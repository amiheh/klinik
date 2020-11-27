<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dashboard Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="pasien-index col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Antrian</h3>
            </div>
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'nama_pasien',
                        'tmptlahir_pasien',
                        'tgllahir_pasien',
                        //'gender_pegawai',
                        //'telepon_pasien',
                        //'pekerjaan_pasien',
                        //'usia_pasien',
                        [
                            'header' => 'Action',
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{action}',
                            'buttons' => [
                                'action' => function ($url,$model) {
                                                    $url = Url::to(['pasien/status','id'=>$model->id_pasien]);
                                                    return Html::a('Terima', $url, ['class'=>'btn btn-info']);
                                                }
                            ]
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
    <div class="pasien-create col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Form Pendaftaran</h3>
            </div>
            <div class="box-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
    


