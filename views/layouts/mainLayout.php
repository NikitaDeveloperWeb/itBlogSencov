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
    <div class="main">

      <?= $content ?>

    </div>
  </div>


  <?php $this->endBody() ?>
</body>
<script>
  let gumb = document.querySelector('.gumburger');
  let aside = document.querySelector('.wrapper__aside');
  let aside_content = document.querySelector('.wrapper__aside__preview');
  let ASIDE_STATE = true;

  function setStateAside(state) {
    ASIDE_STATE = state;
    aside.style.transition = '0.7s';
    if (ASIDE_STATE === false) {
      aside_content.style.display = 'none';
      aside.style.width = '5%';
      aside.style.justifyContent = 'flex-start';
    } else {
      aside.style.width = '20%';
      aside_content.style.display = '';
      aside.style.justifyContent = 'center';
    }
  }

  setStateAside(ASIDE_STATE);

  function setStateElAside() {

    if (ASIDE_STATE) {
      ASIDE_STATE = false;
    } else {
      ASIDE_STATE = true;
    }
    setStateAside(ASIDE_STATE);
  }
  gumb.addEventListener('click', () => {
    setStateElAside()
  });
</script>

</html>
<?php $this->endPage() ?>