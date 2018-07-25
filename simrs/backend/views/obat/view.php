<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Obat */

$this->title = $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-view panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Detail Data Obat
        </span>
        <span class="pull-right">
           <?= Html::a('Update', ['update', 'id' => $model->id_obat], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id_obat], [
            'class' => 'btn btn-danger',
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
            'id_obat',
            'nama_obat',
            'harga',
        ],
    ]) ?>

    </div>
</div>