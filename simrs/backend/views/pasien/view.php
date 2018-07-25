<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model common\models\Pasien */

$this->title = $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 

if(Yii::$app->user->identity->role == 'Admin')
    {
 ?>
<div class="pasien-view panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Biodata Pasien
        </span>
        
    </div>
    <div class="panel-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'jenis_kelamin',
            'tanggal_lahir',
            'telp_pasien',
            'tgl_pendaftaran',
            [
                'attribute' => 'Poliklinik Tujuan',
                'value' => function($data){
                    return $data->poliklinik->nama_poliklinik;
                }
            ],
        ],
    ]) ?>

    <span class="pull-left">
            <?= Html::a('Update', ['update', 'id' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
            
        </span>

    </div>
</div>
<?php  
    }
    
    else{ ?>



<!-- [ROLE => DOKTER ] -->
<!-- ========================== BIODATA PASIEN ============================-->

<div class="pasien-view panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Biodata Pasien
        </span>
        
    </div>
    <div class="panel-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            // 'jenis_kelamin',
            // 'tanggal_lahir',
            // 'telp_pasien',
            // 'tgl_pendaftaran',
            [
                'attribute' => 'Poliklinik Tujuan',
                'value' => function($data){
                    return $data->poliklinik->nama_poliklinik;
                }
            ],
        ],
    ]) ?>

    <span class="pull-left">
            <?= Html::a('Input Obat', ['resep/create', 'id' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Pemeriksaan', ['pemeriksaan/create', 'id' => $model->id_pasien], ['class' => 'btn btn-info']) ?>
            
        </span>

    </div>
</div>

<!-- ================================= RIWAYAT PEMERIKSAAN ============================ -->

<div class="pasien-view panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Riwayat Pemeriksaan
        </span>
        
    </div>
    <div class="panel-body">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

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

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    </div>
</div>

<div class="pasien-view panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Riwayat Pemberian Obat
        </span>
        
    </div>
    <div class="panel-body">
 <?=
    GridView::widget([
        'dataProvider' => $dataProvider2,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
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

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
?>


    </div>
</div>
<?php } ?>