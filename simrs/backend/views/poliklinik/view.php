<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Poliklinik */

$this->title = $model->nama_poliklinik;
$this->params['breadcrumbs'][] = ['label' => 'Poliklinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-index panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Detail Data Poliklinik
        </span>
        <span class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->id_poliklinik], ['class' => 'btn btn-primary btn-sm']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_poliklinik], [
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
            'id_poliklinik',
            'nama_poliklinik',
        ],
    ]) ?>
    </div>
</div>