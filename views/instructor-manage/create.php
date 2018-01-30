<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Instructor */

$this->title = 'Dodaj instruktora';
$this->params['breadcrumbs'][] = ['label' => 'Instruktorzy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>



</div>


