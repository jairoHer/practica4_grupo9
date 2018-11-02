<?php

namespace app\utilities;

use Yii;
use app\models\Categoria;
use app\models\Producto;

class OperacionesCategoria{
  public static function Nueva_Categoria($nombre_categoria, $codigo){
      if($nombre_categoria!=null&&$codigo!=null){
        $categoria = new Categoria;
        $categoria->nombre = $nombre_categoria;
        $categoria->codigo = $codigo;
        $categoria->save();
        return true;
      }
      return false;
  }

  public static function Quitar_Categoria($codigo_producto){
      $producto_row = Categoria::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
      if($producto_row!=null){
        $producto_row->delete();
        return true;
      }
      return false;
  }

  public static function get_categorias_disponibles(){
      $query_string= "SELECT * from categoria";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }
}
