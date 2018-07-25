<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index panel panel-default" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data Pasien
        </span>
        <span class="pull-right">
            <?= Html::a('<i class="fa fa-external-link"></i> Export Ms Excel', ['#'], ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('<i class="fa fa-external-link"></i> Export Ms Word', ['#'], ['class' => 'btn btn-primary btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">

    <?php 
    if(Yii::$app->user->identity->role == 'Admin')
    {
     ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $searchModel2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'jenis_kelamin',
            'tanggal_lahir',
            'telp_pasien',
            'tgl_pendaftaran',

            // 'id_poliklinik',
            [
                'attribute' => 'Poliklinik',
                'value' => function($data){
                    return $data->poliklinik->nama_poliklinik;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php 
    }
    else{ ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'jenis_kelamin',
            'tanggal_lahir',
            'telp_pasien',
            'tgl_pendaftaran',

            // 'id_poliklinik',
            [
                'attribute' => 'Poliklinik',
                'value' => function($data){
                    return $data->poliklinik->nama_poliklinik;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php } ?>


    </div>
</div>
