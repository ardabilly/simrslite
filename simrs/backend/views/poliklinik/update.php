<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Poliklinik */

$this->title = 'Update Poliklinik: ' . $model->id_poliklinik;
$this->params['breadcrumbs'][] = ['label' => 'Polikliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poliklinik, 'url' => ['view', 'id' => $model->id_poliklinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poliklinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
