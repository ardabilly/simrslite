<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<section class="content">

    <div class="error-page" style="margin-top: 10%;">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>
                COMING SOON! Mohon maaf ntuk saat ini halaman frontend belum tersedia silahkan akses halaman backend dengan mengeklik link berikut.  <a href='<?= Yii::$app->urlManager->createUrl('../../../backend/web') ?>'>Sistem Managemen - RS</a> atau halaman ini akan meredirect otomatis.
            </p>

            <b>best regards,</b>
            <p>Admin SIMRS</p>

           <!--  <form class='search-form'>
                <div class='input-group'>
                    <input type="text" name="search" class='form-control' placeholder="Search"/>

                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>

</section>
