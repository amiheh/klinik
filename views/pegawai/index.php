<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dashboard Manager';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Pegawai</h3>
            <div class="box-tools pull-right">
                <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'username',
                    [
                        'attribute' => 'level_user',
                        'value' => function($dataProvider) {
                            return Yii::$app->helper->getLevelUser($dataProvider->level_user);
                        }
                    ],
                    'nama_user',
                    //'gender_user',
                    //'alamat_user:ntext',
                    //'telepon_user',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

    


</div>
