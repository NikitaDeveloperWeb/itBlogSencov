<?php

namespace app\models;

use yii\base\Model;

class AddComments extends Model
{

  public  $author;
  public  $text;
  public  $date;
  public  $post;

  public function rules()
  {
    return [
      [['author', 'text', 'date', 'post'], 'required', 'message' => ''],

    ];
  }
  public function Add()
  {
    $comm = new Comments();
    $comm->author = $this->author;
    $comm->text = $this->text;
    $comm->date = $this->date;
    $comm->post = $this->post;
    return $comm->save();
  }
}
