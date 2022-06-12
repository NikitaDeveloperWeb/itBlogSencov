<?php

namespace app\controllers;

use app\models\AddComments;
use app\models\AddPost;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Login;
use app\models\Post;
use app\models\SignUp;
use app\models\UpdatePost;
use app\models\UpdateUser;
use app\models\User;
use yii\web\UploadedFile;

class SiteController extends Controller
{
  /**
   * {@inheritdoc}
   */
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['logout'],
        'rules' => [
          [
            'actions' => ['logout'],
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        'class' => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
    ];
  }

  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
    $this->layout = 'mainLayout';
    return $this->render('index');
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionAuth()
  {
    $this->layout = 'loginLayout';
    $modelReg = new SignUp();
    $modelReg->typeUser = 'User';
    if (isset($_POST['SignUp'])) {
      $modelReg->attributes = Yii::$app->request->post('SignUp');
    }
    if ($modelReg->validate() &&  $modelReg->signup()) {
      return $this->redirect('index');
    }
    // auth
    if (!Yii::$app->user->isGuest) {
      if (Yii::$app->user->identity['typeUser'] === 'Admin') {
        return $this->redirect(['site/admin']);
      } else {
        return $this->redirect(['site/dashbord']);
      }
    }
    $login_model = new Login();
    if (Yii::$app->request->post('Login')) {
      $login_model->attributes = Yii::$app->request->post('Login');
      if ($login_model->validate()) {
        setcookie("Auth", "true");
        Yii::$app->user->login($login_model->getUser());
        return $this->redirect(['site/dashbord']);
      }
    }
    return $this->render('auth', ['modelReg' => $modelReg, 'login_model' => $login_model]);
  }

  /**
   * Logout action.
   *
   * @return Response
   */
  public function actionLogout()
  {
    Yii::$app->user->logout();
    setcookie("Auth", "");
    return $this->redirect(['/site/index']);
  }

  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionDashbord()
  {
    return $this->render('dashbord');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionPhp()
  {
    return $this->render('php');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionJs()
  {
    return $this->render('js');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionHtml()
  {
    return $this->render('html');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionCss()
  {
    return $this->render('css');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionAddnews($idAuthor)
  {
    $model = new AddPost();

    if (Yii::$app->request->isPost) {
      $model->author = $idAuthor;
      $model->date = date("m.d.y");
      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/post/{$model->image->baseName}.{$model->image->extension}");
        $model->Add();
        return $this->redirect(['site/admin ']);
      }
    }
    return $this->render('addnews', ['model' => $model]);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionAdmin()
  {
    return $this->render('admin');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionEditnews($id)
  {
    $post = Post::findOne($id);
    $model = new UpdatePost($post);
    $userData = Yii::$app->user->identity;
    if (Yii::$app->request->isPost) {
      $model->author = $userData['id'];

      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/post/{$model->image->baseName}.{$model->image->extension}");
        $model->update();
        return $this->redirect(['site/admin']);
      }
    }
    return $this->render('editnews', ['model' => $model, 'idPost' => $id]);
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionPostdelete($id)
  {
    $model = Post::findOne($id);
    if ($model) {
      $model->delete();
    }
    return $this->redirect(['site/admin']);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionNews($id)
  {
    $post = Post::findOne($id);
    $userData = Yii::$app->user->identity;
    $model = new AddComments();
    $model->author = $userData['id'];
    $model->post = $id;
    $model->date = date("m.d.y");
    if (isset($_POST['AddComments'])) {
      $model->attributes = Yii::$app->request->post('AddComments');
    }
    if ($model->validate() &&  $model->Add()) {
      return $this->redirect(['news', 'id' => $id]);
    }
    return $this->render('news', ['model' => $model, 'post' => $post]);
  }
  /**
   * @return User the loaded model
   */
  private function findUser()
  {
    return User::findOne(Yii::$app->user->identity->getId());
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionProfile()

  {
    $user = $this->findUser();
    $model = new UpdateUser($user);

    if ($model->load(Yii::$app->request->post()) && $model->update()) {
      return $this->redirect(['site/dashbord']);
    } else {
      return $this->render('profile', [
        'model' => $model,
      ]);
    }
  }

  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionSearch($title)
  {
    $post = Post::find()->where(['title' => $title])->one();
    if (isset($post)) {
      return $this->render('search', ['post' => $post]);
    } else {
      return $this->render('dashbord');
    }
  }
}
