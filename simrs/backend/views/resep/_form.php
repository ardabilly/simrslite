<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Resep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Tambah Data Resep
        </span>
        <span class="pull-right">
            <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-danger btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->textInput(['value' => $_GET['id'],'readOnly'=>true])?>

    <?= $form->field($model, 'id_user')->textInput()->label('Pilih Dokter Penanggung Jawab')->dropDownList(ArrayHelper::map(common\models\User::find()->where(['role' => 'Dokter'])->all(),
            
    'id',
    'full_name')
            
            ) ?>


    <?= $form->field($model, 'id_obat')->textInput()->label('Pilih Obat')->dropDownList(ArrayHelper::map(common\models\Obat::find()->all(),
            
    'id_obat',
    'nama_obat')
     ) ?>

    <?= $form->field($model, 'jumlah_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
