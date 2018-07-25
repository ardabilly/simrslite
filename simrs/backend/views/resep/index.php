<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reseps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-index panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data Resep
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

            [
                'attribute' => 'Nama Pasien',
                'value' => function($data){
                    return $data->pasien->nama_pasien;
                }
            ],
            [
                'attribute' => 'Dokter Penanggung Jawab',
                'value' => function($data){
                    return $data->user->full_name;
                }
            ],
             [
                'attribute' => 'Nama Obat',
                'value' => function($data){
                    return $data->obat->nama_obat;
                }
            ],
            'jumlah_obat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
