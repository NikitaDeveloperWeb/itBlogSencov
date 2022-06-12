<?php

namespace app\models;

use yii\base\Model;

class AddPost extends Model
{

  public  $author;
  public  $image;
  public  $title;
  public  $text;
  public  $date;
  public  $categoria;
  public function rules()
  {
    return [
      [['author', 'image', 'title',  'text', 'date', 'categoria'], 'required', 'message' => 'Введите значение...'],
      [['image'], 'file', 'extensions' => 'png, jpg'],

    ];
  }
  public function Add()
  {
    $post = new Post();
    $post->author = $this->author;
    $post->image = $this->image;
    $post->title = $this->title;
    $post->text = $this->text;
    $post->date = $this->date;
    $post->categoria = $this->categoria;
    return $post->save();
  }
}
