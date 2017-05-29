<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosProductosDetalleFixture
 *
 */
class PedidosProductosDetalleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedidos_productos_detalle';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pedidos_empresa_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'prioridade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'terminado' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_pedidos_empresas_producto_prioridades1_idx' => ['type' => 'index', 'columns' => ['prioridade_id'], 'length' => []],
            'fk_pedidos_productos_detalle_pedidos_empresas1_idx' => ['type' => 'index', 'columns' => ['pedidos_empresa_id'], 'length' => []],
            'fk_pedidos_productos_detalle_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_pedidos_empresas_producto_prioridades1' => ['type' => 'foreign', 'columns' => ['prioridade_id'], 'references' => ['prioridades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedidos_productos_detalle_pedidos_empresas1' => ['type' => 'foreign', 'columns' => ['pedidos_empresa_id'], 'references' => ['pedidos_empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedidos_productos_detalle_producto1' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['producto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'pedidos_empresa_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'fecha' => '2017-05-29 10:25:18',
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'prioridade_id' => 1,
            'terminado' => 1
        ],
    ];
}
