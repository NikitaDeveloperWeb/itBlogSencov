<?php

namespace app\models;


use yii\base\Model;
use yii;

/**
 * UserUpdate form
 */
class UpdatePost extends Model
{
  public  $author;
  public  $image;
  public  $title;
  public  $text;
  public  $date;
  public  $categoria;
  /**
   * @var Post
   */
  private $_post;

  public function __construct(Post $post, $config = [])
  {
    $this->_post = $post;
    $this->author = $post->author;
    $this->image = $post->image;
    $this->title = $post->title;
    $this->text = $post->text;
    $this->date = $post->date;
    $this->categoria = $post->categoria;
    parent::__construct($config);
  }

  public function rules()
  {
    return [
      [['author', 'image', 'title', 'text', 'date', 'categoria'], 'required', 'message' => 'Введите значение...'],
    ];
  }

  public function update()
  {
    if ($this->validate()) {
      $post = $this->_post;
      $post->author = $this->author;
      $post->image = $this->image;
      $post->text = $this->text;
      $post->title = $this->title;
      $post->date = $post->date;
      $post->categoria = $this->categoria;
      return $post->save();
    } else {
      return false;
    }
  }
}
