<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TareasFixture
 *
 */
class TareasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'subproceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_inicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'segundos_duracion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descripcion' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_tareas_subproceso1_idx' => ['type' => 'index', 'columns' => ['subproceso_id'], 'length' => []],
            'fk_tareas_ordens1_idx' => ['type' => 'index', 'columns' => ['orden_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_tareas_subproceso1' => ['type' => 'foreign', 'columns' => ['subproceso_id'], 'references' => ['subproceso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tareas_ordens1' => ['type' => 'foreign', 'columns' => ['orden_id'], 'references' => ['ordens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'subproceso_id' => 1,
            'orden_id' => 1,
            'fecha_inicio' => '2017-09-05 11:15:41',
            'segundos_duracion' => 1,
            'descripcion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
