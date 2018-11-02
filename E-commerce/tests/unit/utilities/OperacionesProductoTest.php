<?php

namespace tests\utilities;

use app\utilities\OperacionesProducto;

class OperacionesProductoTest extends \Codeception\Test\Unit
{
  //Arrange
  private $codigo_producto = 2;//Arrange
  private $codigo_producto_nuevo = 8;
  private $categoria = 1;
  private $nombre = "HP Pavilion";
  private $Descripcion = "Computadora touch de 19'' 12 gb de ram, core i7 8th gen";
  private $precio = 14000;
  private $estado = 1;

  public function testAgregarProducto(){
    $result = OperacionesProducto::agregarProducto($this->codigo_producto_nuevo,$this->categoria,$this->nombre,$this->Descripcion,$this->precio,$this->estado);//Act
    $this->assertTrue($result);//Assert
    //$this->assertNotEmpty($result);//Assert
  }
  public function testEliminarProducto(){
    $result = OperacionesProducto::eliminarProducto(7);//Act
    $this->assertTrue($result);
  }


  public function testSumaTotalDeCompras(){
    $total_compras= OperacionesProducto::get_total_compras();//Act
    $this->assertGreaterThanOrEqual(0,$total_compras);//Assert


  }
  public function testComprarProducto(){
    $result =OperacionesProducto::comprar_producto($this->codigo_producto);//Act
    $this->assertTrue($result);//Assert
  }
  public function testQuitarCompra(){
    $result =OperacionesProducto::Quitar_Compra($this->codigo_producto);//Act
    $this->assertTrue($result);//Assert
  }
  public function testObtenerListaDeProductoDisponibles(){
    $result = OperacionesProducto::get_productos_disponibles();//Act
    //if(is_null($result)){
    //  $this->assertEmpty($result);//Assert
    //}else{
      $this->assertNotEmpty($result);//Assert
    //}
    //$this->assertNotEmpty($result);//Assert
  }

  public function testObtenerListaDeProductosComprados(){
    $result = OperacionesProducto::get_productos_comprados();//Act
    if(is_null($result)){
      $this->assertEmpty($result);//Assert
    }else{
      $this->assertNotEmpty($result);//Assert
    }

  }

}
