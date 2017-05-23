<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProcesoFixture
 *
 */
class ProcesoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proceso';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'familia_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'precio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'moneda_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'iva_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'visible' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'enlaces' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'centro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'procesocol' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_proceso_ivas1_idx' => ['type' => 'index', 'columns' => ['iva_id'], 'length' => []],
            'fk_proceso_monedas1_idx' => ['type' => 'index', 'columns' => ['moneda_id'], 'length' => []],
            'fk_proceso_familias1_idx' => ['type' => 'index', 'columns' => ['familia_id'], 'length' => []],
            'fk_proceso_centros1_idx' => ['type' => 'index', 'columns' => ['centro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_proceso_ivas1' => ['type' => 'foreign', 'columns' => ['iva_id'], 'references' => ['ivas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proceso_monedas1' => ['type' => 'foreign', 'columns' => ['moneda_id'], 'references' => ['monedas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proceso_familias1' => ['type' => 'foreign', 'columns' => ['familia_id'], 'references' => ['familias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proceso_centros1' => ['type' => 'foreign', 'columns' => ['centro_id'], 'references' => ['centros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'nombre' => 'Lorem ipsum dolor sit amet',
            'referencia' => 'Lorem ipsum dolor sit amet',
            'familia_id' => 1,
            'precio' => 1,
            'moneda_id' => 1,
            'iva_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'visible' => 1,
            'enlaces' => 'Lorem ipsum dolor sit amet',
            'centro_id' => 1,
            'procesocol' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
