<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Takepart */

$this->title = 'Zaktualizuj zapis: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zapisy na zajęcia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Zaktualizuj zapis';
?>
<div class="takepart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
