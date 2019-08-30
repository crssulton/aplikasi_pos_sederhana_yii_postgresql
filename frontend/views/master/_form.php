<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Master */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-form">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?> -->

            <!-- <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?> -->

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_hash')->passwordInput() ?>
            
            <!-- <?= $form->field($model, 'status')->textInput() ?> -->

            <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

            <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

            <!-- <?= $form->field($model, 'verification_token')->textInput(['maxlength' => true]) ?> -->

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
