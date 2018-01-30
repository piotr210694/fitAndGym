<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Takepart */

$this->title = 'Zapisz na zajęcia';
$this->params['breadcrumbs'][] = ['label' => 'Takeparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
