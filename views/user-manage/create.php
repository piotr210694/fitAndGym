<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersManage */

$this->title = 'Utwórz użytkownika';
$this->params['breadcrumbs'][] = ['label' => 'Zarządzaj użytkownikami', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-manage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
