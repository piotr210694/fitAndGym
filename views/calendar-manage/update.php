<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calendar */

$this->title = 'Zaktualizuj zajęcia w kalendarzu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kalendarz zajęć', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Aktualizuj';
?>
<div class="calendar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
