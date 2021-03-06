<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


        if (Yii::$app->user->isGuest) {
            Yii::$app->response->redirect(['site/login']);
        };

?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">KSM</span><span class="logo-lg">Klinik Sukamaju</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">
                            <?php if (!Yii::$app->user->isGuest): ?>
                                <?= Yii::$app->user->Identity->nama_user ?>
                            <?php endif; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <p><?= Yii::$app->user->Identity->nama_user ?></p>
                                <?php endif; ?>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
