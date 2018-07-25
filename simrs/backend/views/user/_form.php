<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form panel panel-orange" style="border-color: orange;">
    <div class="panel-heading" style="background-color: orange;">
        <span style="font-size: 18px;  color:#fff;">
            Kelola Data User
        </span>
        <span class="pull-right">
            <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </span>
    </div>
    <div class="panel-body">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>
   
    <?= $form->field($model, 'role')->textInput() ?>
   
    <?= $form->field($model, 'id_poliklinik')->textInput()->label('Poliklinik')->dropDownList(ArrayHelper::map(common\models\Poliklinik::find()->all(),
            
    'id_poliklinik',
    'nama_poliklinik')
     ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
