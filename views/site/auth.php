<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Blog | аутентификация ';
?>
<!-- <div class="wrapper__aside form">

</div> -->
<div class="wrapper__content form-div">

  <a class="logo" href=<?= Url::to(['site/']) ?>> <?= Html::img('@web/img/logo.png', ['alt' => 'Удалить', 'class' => '', 'id' => 'gumb']); ?>
    <h2>IT-BLOG</h2>
  </a>
  <p> интернет, технологии, программирование</p>

  <?php $form = ActiveForm::begin(['options' => ['class' => 'form', 'id' => "form_login"]]); ?>
  <?= $form->field($login_model, 'email')->input('email', ['class' => 'field-main', 'placeholder' => 'Почта'])->label('');  ?>
  <?= $form->field($login_model, 'password')->passwordInput(['class' => 'field-main', 'placeholder' => 'Пароль'])->label(''); ?>
  <button type="submit" class="button-main">Войти</button>
  <?php ActiveForm::end(); ?>
  <?php $form = ActiveForm::begin(['options' => ['class' => 'form', 'id' => 'form-registration'],]) ?>
  <?= $form->field($modelReg, 'firstname')->textInput(['autofocus' => true, 'class' => 'field-main', 'placeholder' => 'Имя'])->label('') ?>
  <?= $form->field($modelReg, 'lastname')->textInput(['class' => 'field-main', 'placeholder' => 'Фамилия'])->label('') ?>
  <?= $form->field($modelReg, 'email')->input('email', ['class' => 'field-main', 'placeholder' => 'Почта'])->label('') ?>
  <?= $form->field($modelReg, 'password')->passwordInput(['class' => 'field-main', 'placeholder' => 'Пароль'])->label('') ?>
  <?= $form->field($modelReg, 'password_repeat')->passwordInput(['class' => 'field-main', 'placeholder' => 'Повторите пароль'])->label('') ?>

  <button type="submit" class="button-main">Зарегистрироваться</button>


  <?php ActiveForm::end(); ?>
  <div class="switch" onclick="changeFormsState()">
    <h3></h3>
  </div>
</div>
</div>