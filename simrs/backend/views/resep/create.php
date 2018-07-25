<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Resep */

$this->title = 'Create Resep';
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
