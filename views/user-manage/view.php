<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsersManage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zarządzaj użytkownikami', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-manage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Aktualizuj', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Jesteś pewny, że chcesz usunąć tego użytkownika?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'passwordHash',
            'email:email',
            'authKey',
            'accessToken',
        ],
    ]) ?>

</div>
