<?php

/** @var yii\web\View $this */

$this->title = 'Blog| статьи';

use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<h1>Статьи</h1>
<?
$title = '';
if (isset($_POST['title'])) {
  $title = $_POST['title'];
}
?>
<form class="form-search" action="<?= Url::to(['/site/search']) ?>">
  <input type="text" class="field-main" placeholder="Введите слово" name="title">
  <button class="button-main" type="submit">Найти</button>
</form>
<ul>
  <div class="news">
    <?= Html::img('@web/img/post/' . $post['image'] . '', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?>
    <a href=<?= Url::to(['site/news/', 'id' => $post['id']]); ?>><?= $post['title'] ?></a>
  </div>

</ul>