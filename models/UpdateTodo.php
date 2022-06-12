<?php

namespace app\models;


use yii\base\Model;
use yii;

/**
 * UserUpdate form
 */
class UpdateTodo extends Model
{

  public  $image;
  public  $title;
  public  $text;
  /**
   * @var Todo
   */
  private $_todo;

  public function __construct(Todo $todo, $config = [])
  {
    $this->_todo = $todo;
    $this->image = $todo->image;
    $this->title = $todo->title;
    $this->text = $todo->text;
    parent::__construct($config);
  }

  public function rules()
  {
    return [
      [['image', 'title', 'text',], 'required', 'message' => 'Введите значение...'],
    ];
  }

  public function update()
  {
    if ($this->validate()) {
      $todo = $this->_todo;

      $todo->image = $this->image;
      $todo->text = $this->text;
      $todo->title = $this->title;

      return $todo->save();
    } else {
      return false;
    }
  }
}
