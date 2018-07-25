<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
// use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Pemeriksaan */

$this->title = $model->id_pemeriksaan;
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Detail Data Pemeriksaan
        </span>
        <span class="pull-right">
            <?= Html::a('Export Ms Excel', ['#'], ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('Export Ms Word', ['#'], ['class' => 'btn btn-primary btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'id_pemeriksaan',
             [
                'attribute' => 'Nama Pasien',
                'value' => function($data){
                    return $data->pasien->nama_pasien;
                }
            ],
            'keluhan',
            'perawatan',
            'tindakan',
            'status:ntext',

        ],
    ]); ?>

    <?= Html::a('Lihat Data Pemeriksaan', ['index'], ['class' => 'btn btn-success btn-sm']) ?>

    </div>
</div>