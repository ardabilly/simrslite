<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pemeriksaan */

$this->title = 'Update Pemeriksaan: ' . $model->id_pemeriksaan;
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemeriksaan, 'url' => ['view', 'id' => $model->id_pemeriksaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemeriksaan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
