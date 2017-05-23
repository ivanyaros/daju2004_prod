<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialFixture
 *
 */
class MaterialFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'material';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'binary', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'referencia' => ['type' => 'binary', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'familia_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'longitud' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'anchura' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'profundidad' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'color' => ['type' => 'binary', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'gramaje' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'peso_ud' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'unidades_embalaje' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'precio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'moneda_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'iva_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 1024, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'visible' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_material_ivas1_idx' => ['type' => 'index', 'columns' => ['iva_id'], 'length' => []],
            'fk_material_monedas1_idx' => ['type' => 'index', 'columns' => ['moneda_id'], 'length' => []],
            'fk_material_familias1_idx' => ['type' => 'index', 'columns' => ['familia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_material_ivas10' => ['type' => 'foreign', 'columns' => ['iva_id'], 'references' => ['ivas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_material_monedas10' => ['type' => 'foreign', 'columns' => ['moneda_id'], 'references' => ['monedas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_material_familias1' => ['type' => 'foreign', 'columns' => ['familia_id'], 'references' => ['familias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'longitud' => 1,
            'anchura' => 1,
            'profundidad' => 1,
            'color' => 'Lorem ipsum dolor sit amet',
            'gramaje' => 1,
            'peso_ud' => 1,
            'unidades_embalaje' => 1,
            'precio' => 1,
            'moneda_id' => 1,
            'iva_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'visible' => 1
        ],
    ];
}
