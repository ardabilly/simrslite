<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px; color:#fff;">
            Kelola Data Obat
        </span>
        <span class="pull-right">
            <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-primary btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>

</div>
