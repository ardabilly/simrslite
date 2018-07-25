<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Resep */

$this->title = $model->id_resep;
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Laporan Data Resep
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
            'id_resep',
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
        ],
    ]) ?>

</div>
</div>