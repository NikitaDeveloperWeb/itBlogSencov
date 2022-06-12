<?php

/** @var yii\web\View $this */

use app\models\Comments;
use app\models\User;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Blog | полная статья';
$commentsAll = Comments::find()->all();

$userData = Yii::$app->user->identity;
$title = '';
if (isset($_POST['title'])) {
  $title = $_POST['title'];
}
?>
<?php if (!$userData) : ?>
  <header class="header">
    <a class="logo" href=<?= Url::to(['site/']) ?>> <?= Html::img('@web/img/logo.png', ['alt' => 'Удалить', 'class' => '', 'id' => 'gumb']); ?>
      <h2>IT-BLOG</h2>
    </a>
    <p> интернет, технологии, программирование</p>
  </header>
<? endif; ?>
<div class="news-full">
  <h1><?= $post['title'] ?></h1>
  <?= Html::img('@web/img/post/' . $post['image'] . '', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?>
  <p><?= $post['text'] ?></p>
  <p><?= $post['date'] ?></p>
</div>

<button onclick="window.history.back()" class="button-back">Назад</button>
<div class="coments">
  <h2>Коментарии</h2>
  <?php if ($userData) : ?>
    <?php $form = ActiveForm::begin(['options' => ['class' => 'form', 'id' => 'form-comments', 'style' => 'width: 100% !important;'],]) ?>
    <?= $form->field($model, 'text')->textInput(['autofocus' => true, 'class' => 'field-main', 'placeholder' => 'Введите текст...', 'style' => 'width: 1000px !important;'])->label('') ?>
    <button type="submit" class="button-main">Отправить</button>
    <?php ActiveForm::end(); ?>
  <? endif; ?>
  <?php if (!$userData) : ?>
    <a href=<?= Url::to(['site/auth/']); ?>>Авторизуйтесь чтобы оставить комментарий.</a>
  <? endif; ?>
  <?

  foreach ($commentsAll as $key => $comm) {
    if ($comm['post'] === $post['id']) {
      $author = User::findOne($comm['author'])
  ?>
      <div class="comments__item">

        <div class="comments__item__user">
          <span>
            <span>
              <div class="avatar">
                <p> <?= mb_substr($author['firstname'], 0, 1) ?></p>
              </div>
              <p><?= $author['firstname'] . '  ' . $author['lastname'] ?></p>
            </span>
            <p><?= $comm['date'] ?></p>
          </span>
          <p><?= $comm['text'] ?></p>
        </div>

      </div>
  <?    # code...
    }
  } ?>

</div>