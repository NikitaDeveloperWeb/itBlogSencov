<?php

/** @var yii\web\View $this */

use yii\bootstrap4\ActiveForm;

$this->title = 'Blog | редактировать профиль';
$userData = Yii::$app->user->identity;
?>
<div class="profile_preview">
  <div class="circle"><?= mb_substr($userData['firstname'], 0, 1) ?> </div>
  <span>
    <p><?= $userData['lastname'] . ' ' . $userData['firstname'] ?></p>
    <p><?= $userData['email']  ?></p>
  </span>
</div>
<?php $form = ActiveForm::begin([]); ?>
<p>Исправте данные</p>
<?= $form->field($model, 'lastname')->textInput(['class' => 'field-main', 'placeholder' => 'Фамилия'])->label('') ?>
<?= $form->field($model, 'firstname')->textInput(['class' => 'field-main', 'placeholder' => 'Имя'])->label('') ?>

<?= $form->field($model, 'email')->input('email', ['class' => 'field-main', 'placeholder' => 'Почта'])->label('') ?>
<button type="submit" class="button-main">Редактировать</button>
<?php ActiveForm::end(); ?>
</form>