<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Producto;

use app\utilities\OperacionesProducto;

class ProductossController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Productos_disponibles = OperacionesProducto::get_productos_disponibles();

        return $this->render('index',[
          'Productos_disponibles'=>$Productos_disponibles,
        ]);
    }
    public function actionComprarProducto($codigo_producto){
      $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
      if(OperacionesProducto::comprar_producto($codigo_producto)){
            Yii::$app->session->setFlash('success', "Bien, ha comprado ".$producto_row->nombre." de manera exitosa!");
        } else {
            Yii::$app->getSession()->setFlash('error', 'No es posible comprar el producto: '.$producto_row->codigo." ".$producto_row->nombre."");
        }
      return $this->redirect(['index']);
    }

}
