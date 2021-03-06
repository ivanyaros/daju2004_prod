<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaquinasUsadasFixture
 *
 */
class MaquinasUsadasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tarea_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'maquina_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'operaciones' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uso' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_maquinas_usadas_maquinas1_idx' => ['type' => 'index', 'columns' => ['maquina_id'], 'length' => []],
            'fk_maquinas_usadas_tareas1_idx' => ['type' => 'index', 'columns' => ['tarea_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_maquinas_usadas_maquinas1' => ['type' => 'foreign', 'columns' => ['maquina_id'], 'references' => ['maquinas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_maquinas_usadas_tareas1' => ['type' => 'foreign', 'columns' => ['tarea_id'], 'references' => ['tareas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'tarea_id' => 1,
            'maquina_id' => 1,
            'operaciones' => 1,
            'uso' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
