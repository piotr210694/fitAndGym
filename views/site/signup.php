<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Rejestracja';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Uzupełnij pola wymagane do założenia nowego konta na <strong>fit and gym</strong></p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Login:') ?>
                <?= $form->field($model, 'email')->label('E-mail:') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Hasło:') ?>
                <div class="form-group">
                    <?= Html::submitButton('Utwórz konto', ['class' => 'btn btn-primary', 'name'=> 'signup-button']) ?>
                </div>
            <?php $form = ActiveForm::end(); ?>
        </div>
    </div>
</div>