<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EntradasDeMaterialesFixture
 *
 */
class EntradasDeMaterialesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'proveedores_cliente_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'albaran' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_envio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'centro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_recepcion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_entradas_material_proveedores_clientes1_idx' => ['type' => 'index', 'columns' => ['proveedores_cliente_id'], 'length' => []],
            'fk_entradas_material_centros1_idx' => ['type' => 'index', 'columns' => ['centro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_entradas_material_proveedores_clientes1' => ['type' => 'foreign', 'columns' => ['proveedores_cliente_id'], 'references' => ['proveedores_clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_entradas_material_centros1' => ['type' => 'foreign', 'columns' => ['centro_id'], 'references' => ['centros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'proveedores_cliente_id' => 1,
            'referencia' => 'Lorem ipsum dolor sit amet',
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'albaran' => 'Lorem ipsum dolor sit amet',
            'fecha_envio' => '2017-06-13 11:07:08',
            'centro_id' => 1,
            'fecha_recepcion' => '2017-06-13 11:07:08'
        ],
    ];
}
