<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProcesoProductoEntradaFixture
 *
 */
class ProcesoProductoEntradaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proceso_producto_entrada';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'proceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_proceso_has_producto_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_proceso_has_producto_proceso1_idx' => ['type' => 'index', 'columns' => ['proceso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_proceso_has_producto_proceso1' => ['type' => 'foreign', 'columns' => ['proceso_id'], 'references' => ['proceso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proceso_has_producto_producto1' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['producto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'proceso_id' => 1,
            'producto_id' => 1,
            'cantidad' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
