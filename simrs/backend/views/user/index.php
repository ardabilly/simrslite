<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola data user
        </span>
        <span class="pull-right">
            <?= Html::a('Tambah Data', ['site/error'], ['class' => 'btn btn-success btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                'full_name',
                // 'username',
                // 'auth_key',
                // 'password_hash',
                //'password_reset_token',
                'email:email',
                'role',
                //'status',
                // 'id_poliklinik.',
                [
                    'attribute' => 'Nama poliklinik',
                    'value' => function($data){
                        return $data->poliklinik->nama_poliklinik;
                    }
                ],
                //'created_at',
                //'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>        
    </div>
</div>
