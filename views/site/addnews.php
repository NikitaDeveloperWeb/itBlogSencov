<?php

/** @var yii\web\View $this */

use yii\bootstrap4\ActiveForm;

$this->title = 'Blog | добавить пост';
?>
<h1>Добавить статью</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<p>Введите данные</p>

<?= $form->field($model, 'title')->textInput(['class' => 'field-main', 'placeholder' => 'Заголовок'])->label('') ?>
<?= $form->field($model, 'text')->textarea(['class' => 'textarea-main', 'placeholder' => 'Текст'])->label('') ?>
<?= $form->field($model, 'image')->fileInput(['class' => 'upload', 'placeholder' => 'Текст'])->label('') ?>
<?= $form->field($model, 'categoria')->dropDownList([
  'HTML' => 'HTML',
  'CSS' => 'CSS',
  'PHP' => 'PHP',
  'JavaScript' => 'JavaScript',
  'NEWS' => 'NEWS'
])->label('Уровень') ?>
<button type="submit" class="button-main">Добавить</button>
<?php ActiveForm::end(); ?>