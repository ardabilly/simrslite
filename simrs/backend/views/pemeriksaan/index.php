<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemeriksaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-index panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data Pemeriksaan
        </span>
        <span class="pull-right">
            <?= Html::a('<i class="fa fa-external-link"></i> Export Ms Excel', ['#'], ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('<i class="fa fa-external-link"></i> Export Ms Word', ['#'], ['class' => 'btn btn-primary btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pemeriksaan',
            [
                'attribute' => 'Nama Pasien',
                'value' => function($data){
                    return $data->pasien->nama_pasien;
                }
            ],
            'keluhan',
            'perawatan',
            'tindakan',
            //'status:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>