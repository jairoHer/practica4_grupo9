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

class CarretillaController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $Productos_comprados = OperacionesProducto::get_productos_comprados();
      $total_gastado = OperacionesProducto::get_total_compras();
      return $this->render('index',[
        'Productos_comprados'=>$Productos_comprados,
        'total_gastado'=>$total_gastado,
      ]);
    }
    public function actionQuitarCompra($codigo_producto){
      $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
      if(OperacionesProducto::Quitar_Compra($codigo_producto)){
            Yii::$app->session->setFlash('success', "Se ha anulado la compra de: ".$producto_row->nombre." de manera exitosa!");
        } else {
            Yii::$app->getSession()->setFlash('error', 'No es posible anular la compra:  '.$producto_row->nombre."");
        }
      return $this->redirect(['index']);
    }
}
