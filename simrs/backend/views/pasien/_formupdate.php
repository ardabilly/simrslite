<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
// use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="pasien-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;">
            <a data-toggle="collapse" href="#collapse2" style="color:#fff;">Kelola Data Pasien</a>
        </span>
        <span class="pull-right">
        </span>
    </div>
    <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'jenis_kelamin')->radioList(['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'],['style' => 'padding-top:10px;']) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(\yii\jui\DatePicker::className(),['clientOptions' => ['dateFormat' => 'Y-m-d']]) ?>

    <?= $form->field($model, 'telp_pasien')->textInput() ?>

    <?= $form->field($model, 'id_poliklinik')->textInput()->label('Poliklinik Tujuan')->dropDownList(ArrayHelper::map(common\models\Poliklinik::find()->all(),
            
            'id_poliklinik',
            'nama_poliklinik')
            
            ) ?>
            
    <?= $form->field($model, 'tgl_pendaftaran')->textInput(['value' => date("Y-m-d"), 'readOnly'=>true])->label('Tanggal Pendaftaran') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>