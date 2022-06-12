<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Blog | админпанель';
$postAll = Post::find()->all();
$userData = Yii::$app->user->identity;
?>

<div class="dataGrid">
  <h1>Статьи</h1>
  <div class="dataGrid__action">
    <a href=<?= Url::to(['site/addnews/', 'idAuthor' => $userData['id']]); ?>>Добавить статью</a>
  </div>
  <table>
    <?
    foreach ($postAll as $key => $post) {

    ?>
      <tr>
        <td><strong>ID:</strong><?= $post['id'] ?></td>
        <td><strong>Заголовок:</strong><?= $post['title'] ?></td>
        <td><strong>Текст:</strong><?= $post['text'] ?></td>
        <td><strong>Категория:</strong><?= $post['categoria'] ?></td>
        <td><strong>Изображение:</strong><?= Html::img('@web/img/post/' . $post['image'] . '', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?></td>
        <td><strong>Действия:</strong>
          <a href=<?= Url::to(['site/editnews/', 'id' => $post['id']]); ?>>Редактировать</a>
          <a href=<?= Url::to(['site/postdelete/', 'id' => $post['id']]); ?>>Удалить</a>
        </td>
      </tr>
    <?
    } ?>
  </table>
</div>