<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$userData = Yii::$app->user->identity;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
  <?php $this->beginBody() ?>

  <div class="wrapper">
    <?php if ($userData) : ?>
      <div class="wrapper__aside">
        <a href=<?= Url::to(['site/']); ?> class="gumburger">
          <?= Html::img('@web/img/logo.png', ['alt' => 'Удалить', 'class' => 'gumburger', 'id' => 'gumb']); ?>
        </a>
        <div class="wrapper__aside__preview">
          <aside>
            <h2>Категории</h2>
            <a href=<?= Url::to(['site/dashbord/']); ?>>Новости</a>
            <a href=<?= Url::to(['site/php/']); ?>>PHP</a>
            <a href=<?= Url::to(['site/html/']); ?>>HTML</a>
            <a href=<?= Url::to(['site/css/']); ?>>CSS</a>
            <a href=<?= Url::to(['site/js/']); ?>>JS</a>
            <a href=<?= Url::to(['site/profile/']); ?>>Профиль</a>
            <?php if ($userData && $userData['typeUser'] === 'Admin') : ?>
              <a href=<?= Url::to(['site/admin/']); ?>>Панель</a>
            <? endif; ?>
          </aside>
          <?= Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
              'Выход',
              ['class' => '', 'style' => ""]
            )
            . Html::endForm() ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (!$userData) : ?>
      <div class="">

      </div>
    <?php endif; ?>
    <div class="wrapper__content">
      <?= $content ?>
    </div>
  </div>


  <?php $this->endBody() ?>
</body>
<script>

</script>

</html>
<?php $this->endPage() ?>