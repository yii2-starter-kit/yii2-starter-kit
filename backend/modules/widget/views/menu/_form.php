<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var $this  yii\web\View
 * @var $model common\models\WidgetMenu
 */

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]) ?>

<?= $form->errorSummary($model) ?>

<?= $form->field($model, 'key')->textInput(['maxlength' => 1024]) ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => 512]) ?>

<?= $form->field($model, 'items')->widget(trntv\aceeditor\AceEditor::class, [
    'mode' => 'json',
]) ?>

<?= $form->field($model, 'status')->checkbox() ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>
