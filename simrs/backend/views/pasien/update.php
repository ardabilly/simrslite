<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pasien */

$this->title = 'Update Pasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">
    <?= $this->render('_formupdate', [
        'model' => $model,
    ]) ?>

</div>
