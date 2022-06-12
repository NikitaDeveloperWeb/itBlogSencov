<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Blog | редактировать новость';
?>

<?php
$post = Post::findOne($idPost);
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<p>Исправте данные</p>

<?= $form->field($model, 'title')->textInput(['class' => 'field-main', 'placeholder' => 'Заголовок'])->label('') ?>
<?= $form->field($model, 'text')->textarea(['class' => 'textarea-main', 'placeholder' => 'Текст'])->label('') ?>
<?= $form->field($model, 'image')->fileInput(['class' => 'upload', 'placeholder' => 'Текст', 'value' => $post['image']])->label('') ?>
<?= $form->field($model, 'categoria')->dropDownList([
  'HTML' => 'HTML',
  'CSS' => 'CSS',
  'PHP' => 'PHP',
  'JavaScript' => 'JavaScript',
  'NEWS' => 'NEWS'
], ['style' => 'margin-top:20px'])->label('Категория') ?>
<!-- <?= Html::img('@web/img/post/' . $post['image'] . '', ['alt' => '', 'class' => 'img', 'id' => 'arrow']); ?> -->
<button type="submit" class="button-main">Редактировать</button>
<?php ActiveForm::end(); ?>