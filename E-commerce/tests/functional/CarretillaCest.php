<?php


class CarretillaCest
{
    public function _before(FunctionalTester $I)
    {
      $I->amOnPage(['/carretilla/index']);
    }
    public function openCarretillaPage(\FunctionalTester $I)
    {
        $I->see('Mi carretilla de productos');

    }
    public function anularCompraDeCarretilla(\FunctionalTester $I){
      $I->click('Quitar de carrito');
      $I->see('Se ha anulado la compra de:');
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
