<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Pessoa;
use app\models\PessoaSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    public function actionIndex()
    {
       return $this->redirect(['pessoa/index']);
    }
}
