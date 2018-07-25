<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Poliklinik */

$this->title = 'Create Poliklinik';
$this->params['breadcrumbs'][] = ['label' => 'Polikliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
