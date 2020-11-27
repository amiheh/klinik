<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Obat;
use app\models\ObatSearch;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reseps';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="resep-index">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Resep</h3>
        </div>
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id_rkmd',
                    [
                                'attribute' => 'id_obat',
                                'value' => function($dataProvider) {
                                    return ArrayHelper::getValue(Obat::find()->all(), $dataProvider->id_obat)['nama_obat'];
                                }
                            ],

                    'jumlah_obat',
                    'ket_obat:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>


</div>
