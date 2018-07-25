<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Obat */

$this->title = 'Update Obat: ' . $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_obat, 'url' => ['view', 'id' => $model->id_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-update">

      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
