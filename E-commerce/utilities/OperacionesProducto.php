<?php

namespace app\utilities;

use Yii;
use app\models\Categoria;
use app\models\Producto;

class OperacionesProducto{
  public static function get_total_compras(){
    $compras_rows = Producto::find()->where('estado = 2')->all();
    $total_compras=0;
    foreach ($compras_rows as $compras_row) {
      $total_compras=$total_compras+$compras_row->precio;
    }
    return $total_compras;
  }
  public static function comprar_producto($codigo_producto){


          $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto_row->estado = 2;
          $producto_row->save();
          return true;
  }
  public static function Quitar_Compra($codigo_producto){


          $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto_row->estado = 1;
          $producto_row->save();
          return true;


  }

  public static function get_productos_disponibles(){
      $query_string= "SELECT * from Producto where estado = 1;";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }
  public static function get_productos_comprados(){
      $query_string= "SELECT * from Producto where estado = 2;";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }

  public static function agregarProducto($Codigo,$Categoria,$Nombre,$Descripcion,$Precio,$Estado)
  {
        $model = new Producto();
        $model->codigo = $Codigo;
        $model->categoria = $Categoria;
        $model->nombre = $Nombre;
        $model->nombre = $Descripcion;
        $model->precio = $Precio;
        $model->estado = $Estado;
        $model->save();
        return true;
  }

  public static function eliminarProducto($codigo_producto){
          $producto = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto->delete();
          return true;
  }

}
