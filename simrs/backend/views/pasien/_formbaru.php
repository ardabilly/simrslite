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
            <a data-toggle="collapse" href="#collapse3" style="color:#fff;">Daftar Pasien Lama</a>
        </span>
        <span class="pull-right">
        </span>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'nama_pasien')->textInput(['id' => 'textid'])->label('Pilih Pasien')->dropDownList(ArrayHelper::map(common\models\Pasien::find()->all(),
            
            'id_pasien',
            'nama_pasien')
            
            )  ?>
 
    <div class="form-group">
        <?= Html::a('Proses', ['error', 'id' => '' ], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
</div>