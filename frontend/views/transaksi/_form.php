<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>
            
            <?= $form->field($model, 'transaksi_nama')->dropDownList($list_barang, ['prompt' => 'Pilih Nama Barang'])->label('Nama Barang') ?>

            <?= $form->field($model, 'transaksi_jumlah')->textInput(['type' => 'number'])->label('Jumlah Barang') ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
