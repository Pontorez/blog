<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_preview')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'post_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_date')->widget(Datetimepicker::className(), ['options' => [
        'lang' => 'ru',
        'format' => 'Y-m-d H:i',
        'timepicker' => true,
        'value' => $model->post_date,
        'mask' => '9999-99-99 99:99',
    ]]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
