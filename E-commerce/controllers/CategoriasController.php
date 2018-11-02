<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Categoria;

use app\utilities\OperacionesCategoria;

class CategoriasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Productos_disponibles = OperacionesCategoria::get_categorias_disponibles();

        return $this->render('index',[
          'Productos_disponibles'=>$Productos_disponibles,
        ]);
    }

    public function actionAgregar()
    {
        $model = new Categoria;
        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){
                if(OperacionesCategoria::Nueva_Categoria($model->nombre, $model->codigo)){
                    Yii::$app->session->setFlash('success', "Bien, ha agregado la categoria de manera exitosa!");
                }
                else{
                    Yii::$app->getSession()->setFlash('Error', 'No es posible agregar la categoria');
                }
            }
            else{
                Yii::$app->getSession()->setFlash('Error', 'No es posible agregar la categoria. Problemas de validacion del modelo');
            }
            return $this->render('agregar', ['model' => $model]);
        } else {
            // la página es mostrada inicialmente o hay algún error de validación
            return $this->render('agregar', ['model' => $model]);
        }
    }

    public function actionEliminarCategoria($codigo_categoria){
      if(OperacionesCategoria::Quitar_Categoria($codigo_categoria)){
            Yii::$app->session->setFlash('success', "Bien, he eliminado de manera exitosa!");
      } else {
          Yii::$app->getSession()->setFlash('error', "No es posible eliminar");
      }
      return $this->redirect(['index']);
    }

}
