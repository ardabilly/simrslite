<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poliklinik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-index panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data Poliklinik
        </span>
        <span class="pull-right">
            <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body"> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_poliklinik',
            'nama_poliklinik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>