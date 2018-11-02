<?php

 
class ListaProductosCest
{
    public function _before(FunctionalTester $I)
    {
      $I->amOnPage(['/productoss/index']);
    }
    public function openListaProductosPage(\FunctionalTester $I)
    {
        $I->see('Listado de Productos');

    }
    public function venderProducto(\FunctionalTester $I){
      $I->click('Comprar');
      $I->see('Bien, ha comprado');
      $I->see('de manera exitosa!');

    }
    /*public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
    }*/
}
