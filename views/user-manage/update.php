<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersManage */

$this->title = 'Aktualizuj użytkownika: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zarządzaj użytkownikami', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Aktualizuj';
?>
<div class="users-manage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
