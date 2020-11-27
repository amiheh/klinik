<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

$this->title = $model->nama_user;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $model->nama_user ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('Update', ['update', 'id' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id_pegawai], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>                
            </div>
        </div>
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'id_pegawai',
                    'username',
                    [
                        'attribute' => 'level_user',
                        'value' => Yii::$app->helper->getLevelUser($model->level_user),
                    ],
                    'nama_user',
                    [
                        'attribute' => 'gender_user',
                        'value' => Yii::$app->helper->getGenderUser($model->gender_user),
                    ],
                    'alamat_user:ntext',
                    'telepon_user',
                ],
            ]) ?>
        </div>
    </div>

</div>
