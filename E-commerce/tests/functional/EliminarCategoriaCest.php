<?php


class EliminarCategoriaCest
{
    public function _before(FunctionalTester $I)
    {
      $I->amOnPage(['/categorias/index']);
    }
    public function openListadoCategoriasPage(\FunctionalTester $I)
    {
        $I->see('Listado de Categorias');

    }
    /*public function eliminarCategoria(\FunctionalTester $I){
      $I->click('Eliminar');
      $I->see('Bien, he eliminado de manera exitosa!');
    }*/

}
