<?php


class CrearProductoCest
{
    public function _before(FunctionalTester $I)
    {
      $I->amOnPage(['/productos/create']);
    }
    public function openAgregarProductoPage(\FunctionalTester $I)
    {
        $I->see('Crear Producto');

    }
    public function AgregarProductoConTodosLosCamposLlenos(\FunctionalTester $I){
      $I->selectOption('Producto[categoria]', array('text' => 'Computadoras'));
      $I->fillField(['name' => 'Producto[nombre]'], 'acer 2020');
      $I->fillField(['name' => 'Producto[descripcion]'], 'compu de pruebas');
      $I->fillField(['name' => 'Producto[precio]'], '3500');
      $I->fillField(['name' => 'Producto[estado]'], '1');
      $I->dontSee('Nombre cannot be blank.');
      $I->dontSee('Descripcion cannot be blank.');
      $I->dontSee('Precio cannot be blank.');
    }
    public function AgregarConCamposVacios(\FunctionalTester $I){
      //$I->submitForm('w0', []);
      $I->selectOption('Producto[categoria]', array('text' => 'Computadoras'));
      $I->fillField(['name' => 'Producto[nombre]'], '');
      $I->fillField(['name' => 'Producto[descripcion]'], '');
      $I->fillField(['name' => 'Producto[precio]'], '');
      $I->fillField(['name' => 'Producto[estado]'], '1');
      $I->click('Guardar');
      $I->expectTo('see validations errors');
      $I->see('Nombre cannot be blank.');
      $I->see('Descripcion cannot be blank.');
      $I->see('Precio cannot be blank.');
    }
}
