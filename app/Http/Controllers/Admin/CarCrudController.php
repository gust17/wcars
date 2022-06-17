<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CarRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CarCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CarCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Car::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/car');
        CRUD::setEntityNameStrings('car', 'cars');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('marca');
        CRUD::column('modelo');
        CRUD::column('compra');
        CRUD::column('valor_fip');
        CRUD::column('ano');
        CRUD::column('kilometragem');
        CRUD::column('licenciado');
        CRUD::column('debito_doc');
        CRUD::column('total_debito');


        CRUD::column('cep');
        CRUD::column('complemento');
        CRUD::column('rua');
        CRUD::column('estado');
        CRUD::column('n');












        CRUD::column('vendedor');
        CRUD::column('cpf');
        CRUD::column('rg');

        CRUD::column('telefone');
        CRUD::column('pix');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CarRequest::class);

        CRUD::field('marca');
        CRUD::field('modelo');
        CRUD::field('compra');
        CRUD::field('valor_fip');
        CRUD::field('ano');
        CRUD::field('parcelas');
        CRUD::field('entrada');
        CRUD::field('kilometragem');
        CRUD::field('licenciado');
        CRUD::field('debito_doc');
        CRUD::field('total_debito');
        CRUD::field('cep');
        CRUD::field('complemento');
        CRUD::field('rua');
        CRUD::field('estado');
        CRUD::field('n');
        CRUD::field('vendedor');
        CRUD::field('cpf');
        CRUD::field('rg');
        CRUD::field('telefone');
        CRUD::field('pix');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
