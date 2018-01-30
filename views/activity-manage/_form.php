<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

use app\models\Instructor;
use app\models\Typeactivity;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'instructor_id')->textInput()->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Instructor::find()->all(), 'id', 'surname'),
        'language' => 'pl',
        'options' => ['placeholder' => 'Wybierz instruktora ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) 
    ?>

    <?= $form->field($model, 'typeActivity_id')->textInput()->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typeactivity::find()->all(), 'id', 'type'),
        //'data' => Typeactivity::find()->where(['id' => '1'])->one(),
        'language' => 'pl',
        'options' => ['placeholder' => 'Wybierz typ aktywności ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])  ?>

    <?= $form->field($model, 'describeActivtity')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Utwórz' : 'Zaktualizuj', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
