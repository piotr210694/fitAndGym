<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use dosamigos\datepicker\DatePicker;
use bootui\datetimepicker\DateTimepicker;
use kartik\select2\Select2;

use app\models\Activity;
use app\models\Room;

/* @var $this yii\web\View */
/* @var $model app\models\Calendar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calendar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput()->widget(
            DateTimepicker::className(), [
                // inline too, not bad
                'options' => ['class' => 'form-control'],
                'addon' => ['prepend' => 'Data i czas rozpoczęcia zajęć'],
                'format' => 'YYYY-MM-DD HH:mm',
            ]);  
    ?>

    <?= $form->field($model, 'activity_id')->textInput()->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Activity::find()->all(), 'id', 'name'),
            'language' => 'pl',
            'options' => ['placeholder' => 'Wybierz zajęcia ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])  
    ?>

    <?= $form->field($model, 'room_id')->textInput()->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Room::find()->all(), 'id', 'number'),
            'language' => 'pl',
            'options' => ['placeholder' => 'Wybierz salę ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])  
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Utwórz' : 'Aktualizuj', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
