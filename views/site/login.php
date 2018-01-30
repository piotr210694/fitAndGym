<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Panel logowania';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Uzupełnik login i hasło by zalogować się do <strong>Fit and gym</strong></p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Login:') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Hasło:') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ])->label('Zapamiętaj mnie') ?>

        <?= yii\authclient\widgets\AuthChoice::widget([
            'baseAuthUrl' => ['site/auth']
        ]) ?> 

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Zaloguj się', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
            </div>
        </div>
        

    <?php ActiveForm::end(); ?>

            
    <div class="col-lg-offset-1">
        <hr>
        <span style="color:#999;">Jesteś nowym użytkownikiem? </span>
        <?= Html::tag('a', 'Zarejestruj się!', ['href'=>'index.php?r=site%2Fsignup']) ?>
    </div>
</div>
