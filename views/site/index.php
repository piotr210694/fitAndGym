<?php

    use yii\helpers\Url;

    /* @var $this yii\web\View */
    $this->title = 'Fit and gym!';

?>
<div class="site-index">

    <div class="jumbotron">
        <img src="img/fitAndGymLogo2.png" alt="logo" width="200px">
        <h1>Witaj na naszej stronie!</h1>
        <p class="lead">Cieszymy się, że jesteś z nami! </p>
    </div>



    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>O nas</h2>

                <p class="text-justify">Tutaj dowiesz się co nieco o naszej siłowni. Dowiesz się o tym, jaki sprzęt posiadamy i dlaczego warto
                do nas zawitać... </p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('site/about') ?>">O nas &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Twoje zajęcia</h2>

                <p class="text-justify">Tutaj dowiesz się na co jesteś zapisany oraz o tym co nowego u nas w ofercie. Możesz od razu
                zapisać się na interesujące Ciebie zajęcia, bądź też wypisać się z tych, na których obecnie jesteś.</p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('takepart-user/index') ?>">Twoje zajęcia &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Kalendarz zajęć</h2>

                <p class="text-justify">Tutaj znajduje się twój osobisty harmonogram zajęć. Dzięki temu wiesz gdzie i o której odbywają
                się twoje aktywności. </p>

                <p><a class="btn btn-default" href="<?= Url::toRoute('calendar-user/index') ?>">Kalendarz zajęć &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
