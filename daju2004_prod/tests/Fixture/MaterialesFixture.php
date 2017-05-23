<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialesFixture
 *
 */
class MaterialesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'material_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_entega' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'localizacione_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'entradas_material_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_materiales_entradas_material1_idx' => ['type' => 'index', 'columns' => ['entradas_material_id'], 'length' => []],
            'fk_materiales_material1_idx' => ['type' => 'index', 'columns' => ['material_id'], 'length' => []],
            'fk_materiales_localizaciones1_idx' => ['type' => 'index', 'columns' => ['localizacione_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_materiales_entradas_material1' => ['type' => 'foreign', 'columns' => ['entradas_material_id'], 'references' => ['entradas_material', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_materiales_material1' => ['type' => 'foreign', 'columns' => ['material_id'], 'references' => ['material', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_materiales_localizaciones1' => ['type' => 'foreign', 'columns' => ['localizacione_id'], 'references' => ['localizaciones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'material_id' => 1,
            'fecha_entega' => '2017-05-23 08:22:31',
            'localizacione_id' => 1,
            'entradas_material_id' => 1
        ],
    ];
}
