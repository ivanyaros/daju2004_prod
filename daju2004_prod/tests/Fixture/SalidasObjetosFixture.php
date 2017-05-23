<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalidasObjetosFixture
 *
 */
class SalidasObjetosFixture extends TestFixture
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
        'fecha_pedido' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_entrega' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'albaran' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pedidos_empresa_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'centro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_salidas_productos_proveedores_clientes1_idx' => ['type' => 'index', 'columns' => ['proveedores_cliente_id'], 'length' => []],
            'fk_salidas_productos_pedidos_empresa1_idx' => ['type' => 'index', 'columns' => ['pedidos_empresa_id'], 'length' => []],
            'fk_salidas_productos_centros1_idx' => ['type' => 'index', 'columns' => ['centro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_salidas_productos_proveedores_clientes1' => ['type' => 'foreign', 'columns' => ['proveedores_cliente_id'], 'references' => ['proveedores_clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_salidas_productos_pedidos_empresa1' => ['type' => 'foreign', 'columns' => ['pedidos_empresa_id'], 'references' => ['pedidos_empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_salidas_productos_centros1' => ['type' => 'foreign', 'columns' => ['centro_id'], 'references' => ['centros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'fecha_pedido' => '2017-05-23 08:22:35',
            'fecha_entrega' => '2017-05-23 08:22:35',
            'albaran' => 'Lorem ipsum dolor sit amet',
            'pedidos_empresa_id' => 1,
            'centro_id' => 1
        ],
    ];
}
