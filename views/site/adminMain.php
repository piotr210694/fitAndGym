<?php

use yii\helpers\Html;
use yii\helpers\Url;

    /* @var $this yii\web\View */
    $this->title = 'Fit and gym!';

?>
<div class="site-index">

    <div class="jumbotron">
        <img src="img/fitAndGymLogo2.png" alt="logo" width="200px">
        <h1>Jesteś w panelu administratora!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Użytkownicy</h2>
                <p>Kontrola nad użytkownikami zarejestrowanymi w serwisie.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('user-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Instruktorzy</h2>
                <p>Zarządzaj instruktorami.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('instructor-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Zajęcia</h2>
                <p>Dodaj bądź edytuj zajęcia.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('activity-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Typ zajęć</h2>
                <p>Rodzaje zajęć na siłowni.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('typeactivity-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Kalendarz zajęć</h2>
                <p>Rozplanuj zajęcia na siłowni.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('calendar-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Zapisy na zajęcia</h2>
                <p>Zobacz kto zapisał się na zajęcia.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('takepart-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Sala</h2>
                <p>Zarządzanie salami.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('room-manage/index') ?>">Zarządzaj &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
