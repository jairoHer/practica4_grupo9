<?php
namespace tests\utilities;
use app\utilities\OperacionesCategoria;
class OperacionesCategoriaTest extends \Codeception\Test\Unit
{
  private $codigo_categoria = 1000;//Arrange
  private $nombre_categoria = "nombre";//Arrange

  public function testNuevaCategoria(){
    $result =OperacionesCategoria::Nueva_Categoria("nombre", 1000);//Act
    $this->assertTrue($result);//Assert
  }

  public function testNuevaCategoriaSinCodigo(){
    $result = OperacionesCategoria::Nueva_Categoria("nombre",null);//Act
    $this->assertFalse($result);//Assert
  }


   /**
   * @depends testNuevaCategoria
   */
  public function testQuitarCategoria(){
    $result = OperacionesCategoria::Quitar_Categoria(3);//Act
    $this->assertTrue($result);//Assert
  }

  public function testQuitarCategoriaQueNoExiste(){
    $result = OperacionesCategoria::Quitar_Categoria(3000);//Act
    $this->assertFalse($result);//Assert
  }
  public function testObtenerListaDeCategoriasDisponibles(){
    $result = OperacionesCategoria::get_categorias_disponibles();//Act
    $this->assertNotEmpty($result);//Assert
  }
}
