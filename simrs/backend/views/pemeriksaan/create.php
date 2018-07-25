<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pemeriksaan */

$this->title = 'Create Pemeriksaan';
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
