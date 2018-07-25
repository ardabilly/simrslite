<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pemeriksaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemeriksaan-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data Pemeriksaan
        </span>
        <span class="pull-right">
            <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->textInput(['value' => $_GET['id'],'readOnly'=>true])?>

    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perawatan')->radioList(['Rawat Jalan' => 'Rawat Jalan', 'Rawat Inap' => 'Rawat Inap'],['style' => 'padding-top:10px;']) ?>


    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
