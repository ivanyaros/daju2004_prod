<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProcesoMaterialFixture
 *
 */
class ProcesoMaterialFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proceso_material';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'proceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'material_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'metros_lineales' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'metros_cuadrados' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_proceso_has_material_material1_idx' => ['type' => 'index', 'columns' => ['material_id'], 'length' => []],
            'fk_proceso_has_material_proceso1_idx' => ['type' => 'index', 'columns' => ['proceso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_proceso_has_material_proceso1' => ['type' => 'foreign', 'columns' => ['proceso_id'], 'references' => ['proceso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_proceso_has_material_material1' => ['type' => 'foreign', 'columns' => ['material_id'], 'references' => ['material', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'material_id' => 1,
            'metros_lineales' => 1,
            'metros_cuadrados' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
