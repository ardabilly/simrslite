<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
        Detail data user
        </span>
        <span class="pull-right">
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </span>
    </div>
    <div class="panel-body">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            'role',
            // 'status',
            [
                'attribute' => 'Poliklinik',
                'value' => function($data){
                    return $data->poliklinik->nama_poliklinik;
                }
            ],
            // 'created_at',
            // 'updated_at',
        ],
    ]) ?>

    </div>

</div>
