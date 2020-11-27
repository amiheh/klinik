<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!--img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/-->
            </div>
            <div class="info" style="position: relative;">
                <?php if (!Yii::$app->user->isGuest): ?>
                    <p><?= Yii::$app->user->Identity->nama_user ?></p>
                <?php endif; ?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <?php if(!Yii::$app->user->isGuest) : ?>
            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard Manager', 'icon' => 'dashboard', 'url' => ['pegawai/index'], 'visible' => Yii::$app->user->Identity->level_user == 1],
                        ['label' => 'Dashboard Admin', 'icon' => 'dashboard', 'url' => ['pasien/index'], 'visible' => Yii::$app->user->Identity->level_user == 2],
                        ['label' => 'Dashboard Dokter', 'icon' => 'dashboard', 'url' => ['pasien/antri'], 'visible' => Yii::$app->user->Identity->level_user == 3],
                        ['label' => 'Dashboard Perawat', 'icon' => 'dashboard', 'url' => ['rekammedis/index'], 'visible' => Yii::$app->user->Identity->level_user == 4],
                        ['label' => 'Obat', 'icon' => 'dashboard', 'url' => ['obat/index'], 'visible' => Yii::$app->user->Identity->level_user == 4],
                        ['label' => 'Dashboard Kasir', 'icon' => 'dashboard', 'url' => ['rekammedis/kasir'], 'visible' => Yii::$app->user->Identity->level_user == 5],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],
                ]
            ) ?>
        <?php endif; ?>
        <!--?= Html::a(
                                    'Logout',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'sidebar-menu tree', 'data-widget'=> 'tree', 'visible' => !Yii::$app->user->isGuest]
                                ) ?-->

    </section>

</aside>
