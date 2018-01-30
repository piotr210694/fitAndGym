<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Activity;

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Takepart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="takepart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
        $model->user_id = Yii::$app->user->getId();  
    ?>

    <?= Html::activeHiddenInput($model, 'user_id') ?>

    <?= $form->field($model, 'activity_id')->textInput()->label('Zajęcia')->widget(Select2::classname(), [
            //'data' => ArrayHelper::map(Activity::find()->all(), 'id', 'name'),
            'data' => ArrayHelper::map(Activity::find()->all(), 'id', 'name'),
            'language' => 'pl',
            'options' => ['placeholder' => 'Wybierz zajęcia ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
            'pluginEvents' => [ 
                "change" => 
                    "function(e) {   
                        var data_id = $(this).val();
                        $('#id').text(data_id);
                    }",
            ],
        ])  
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Zapisz się' : 'Zaktualizuj', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>






</div>


