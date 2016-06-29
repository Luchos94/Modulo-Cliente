<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Modulo Cliente',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Gerente', 'items' => [
                            ['label' => 'Definir Zonas', 'url' => ['/zona/zona']],
                            ['label' => 'Modificar zona', 'url' => ['/zona/modificar']],
                            ['label' => 'Asignar lider', 'url' => ['/interlocutorcomercial/asignarlider']],
                            ['label' => 'Visualizar distrito', 'url' => ['/status/create']],
                        ]],                    
                    ['label' => 'Lider', 'items' => [
                            ['label' => 'Registrar consultor', 'url' => ['/interlocutorcomercial/consultor']],
                            ['label' => 'Asignar consultor', 'url' => ['/site/create']],
                            ['label' => 'Modificar consultor', 'url' => ['/interlocutorcomercial/modificar1']],
                            ['label' => 'Visualizar Zona', 'url' => ['/status/create']],
                        ]],     
                    ['label' => 'Tienda', 'items' => [
                            ['label' => 'Registrar Cliente', 'items' => [
                                    ['label' => 'Persona', 'url' => ['/interlocutorcomercial/cliente1']],
                                    ['label' => 'Empresa', 'url' => ['/interlocutorcomercial/empresa1']],
                                ]], 
                            ['label' => 'Modificar Cliente', 'url' => ['/interlocutorcomercial/modificar2']]
                        ]],     
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
