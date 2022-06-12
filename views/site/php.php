<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Blog | рабочий стол';
$postAll = Post::find()->all();
?>
<h1>Cтатьи PHP</h1>
<?
$title = '';
if (isset($_POST['title'])) {
  $title = $_POST['title'];
}
?>
<form class="form-search" action="<?= Url::to(['/site/search', 'title' => $title]) ?>">
  <input type="text" class="field-main" placeholder="Введите заголовок" name="title">
  <button class="button-main" type="submit">Найти</button>
</form>
<ul>
  <?
  foreach ($postAll as $key => $post) {
    if ($post['categoria'] === 'PHP') {
  ?>
      <li class="news">
        <?= Html::img('@web/img/post/' . $post['image'] . '', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?>
        <a href=<?= Url::to(['site/news/', 'id' => $post['id']]); ?>><?= $post['title'] ?></a>
      </li>
  <?
    }
  } ?>
</ul>