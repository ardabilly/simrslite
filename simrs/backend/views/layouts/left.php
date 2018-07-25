<?php 
use yii\helpers\Html;
 ?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
 -->
        <!-- search form -->
<!--         <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    
                    // if (Yii::$app->user->identity->role=='Admin'){

                    ['label' => 'Data User', 'icon' => 'users', 'url' => ['/user'], 'visible' => Yii::$app->user->identity->role == 'Admin'],
                // }
                    ['label' => 'Data Pasien', 'icon' => 'stethoscope', 'url' => ['/pasien']],
                    ['label' => 'Form Pendaftaran', 'icon' => 'clipboard', 'url' => ['/pasien/create']],
                    [
                        'label' => 'Data Master',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data Poliklinik', 'icon' => 'file-code-o', 'url' => ['/poliklinik'],],
                            ['label' => 'Data Obat', 'icon' => 'dashboard', 'url' => ['/obat'],],
                        ],
                        
                        'visible' => Yii::$app->user->identity->role == 'Admin',
                    ],
                     [
                        'label' => 'Laporan',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                             ['label' => 'Laporan Resep', 'icon' => 'file-o', 'url' => ['/resep/index']],
                             ['label' => 'Laporan Pemeriksaan', 'icon' => 'file-o', 'url' => ['/pemeriksaan/index']],
                        ],
                        // 'visible' => Yii::$app->user->identity->role == 'Admin',
                    ],
                   
                    ['label' => 'Logout', 'icon' => 'sign-out', 'url' => ['site/logout'], 'template' => '<a href=http://localhost/simrs/backend/web/index.php/site/logout "" data-method = "post"><i class="fa fa-sign-out"></i>Logout</a>' , 'option' =>
                    ['data-method' => 'post'],],
                ],
            ]
        ) ?>

    </section>

</aside>
