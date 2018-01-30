<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use yii\helpers\Url;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../web/img/fitAndGymLogo.png" type="image/png" sizes="16x16">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Fit and gym',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Strona główna', 'url' => ['/site/index']],
            ['label' => 'O nas', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ''
            ) :
            (
                ['label' => 'Twoje zajęcia', 'url' => ['/takepart-user/index']]
            ),
            Yii::$app->user->isGuest ? (
                ''
            ) :
            (
                ['label' => 'Kalendarz zajęć', 'url' => ['/calendar-user/index']]
            ),
            Yii::$app->user->getId()==27 ? (
                ['label' => 'Panel administratora', 'url' => ['/site/admin']]
            ) : (
                ''
            ),
            Yii::$app->user->isGuest ? (
                ['label' => 'Zaloguj', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
    
    <?php

        echo Yii::$app->user->getId()==27 ? (
            '   <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="'. Url::toRoute('site/admin') .'">Panel admina</a>
                        </div>
                        <ul class="nav navbar-nav">
                        <li><a href="'. Url::toRoute('user-manage/index') .'">Użytkownicy</a></li>
                        <li><a href="'. Url::toRoute('instructor-manage/index') .'">Instruktorzy</a></li>
                        <li><a href="'. Url::toRoute('activity-manage/index') .'">Zajęcia</a></li>
                        <li><a href="'. Url::toRoute('typeactivity-manage/index') .'">Typ zajęć</a></li>
                        <li><a href="'. Url::toRoute('calendar-manage/index') .'">Kalendarz zajęć</a></li>
                        <li><a href="'. Url::toRoute('takepart-manage/index') .'">Zapisy na zajęcia</a></li>
                        <li><a href="'. Url::toRoute('room-manage/index') .'">Sale</a></li>
                        </ul>
                    </div>
                </nav>
                <hr>'
                ) : (
                    ''
                )

    ?>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Piotr Aleksandrowicz <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
