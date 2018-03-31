<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var $this       yii\web\View
 * @var $model      common\models\ArticleCategory
 * @var $categories common\models\ArticleCategory[]
 */

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => 512]) ?>

<?= $form->field($model, 'slug')
    ->hint(Yii::t('backend', 'If you\'ll leave this field empty, slug will be generated automatically'))
    ->textInput(['maxlength' => 1024]) ?>

<?= $form->field($model, 'parent_id')->dropDownList($categories, ['prompt' => '']) ?>

<?= $form->field($model, 'status')->checkbox() ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>
