<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Resep */

$this->title = 'Update Resep: ' . $model->id_resep;
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_resep, 'url' => ['view', 'id' => $model->id_resep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
