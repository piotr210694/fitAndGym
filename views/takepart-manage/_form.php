<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

use app\models\User;
use app\models\Activity;

/* @var $this yii\web\View */
/* @var $model app\models\Takepart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="takepart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput()->widget(Select2::classname(), [
            'data' => ArrayHelper::map(User::find()->all(), 'id', 'email'),
            'language' => 'pl',
            'options' => ['placeholder' => 'Wybierz użytkownika ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) 
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
