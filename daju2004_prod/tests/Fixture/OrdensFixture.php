<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdensFixture
 *
 */
class OrdensFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'defectuosos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_creacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_terminacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'estado_id' => ['type' => 'integer', 'length' => 8, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'centro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'proceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'coste_operario' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'prioridade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'atributos' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'categoria_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_ordenes_produccion_centros1_idx' => ['type' => 'index', 'columns' => ['centro_id'], 'length' => []],
            'fk_ordenes_produccion_estados1_idx' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
            'fk_ordenes_produccion_proceso1_idx' => ['type' => 'index', 'columns' => ['proceso_id'], 'length' => []],
            'fk_ordens_prioridades1_idx' => ['type' => 'index', 'columns' => ['prioridade_id'], 'length' => []],
            'fk_ordens_categorias1_idx' => ['type' => 'index', 'columns' => ['categoria_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_ordenes_produccion_centros1' => ['type' => 'foreign', 'columns' => ['centro_id'], 'references' => ['centros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordenes_produccion_estados1' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['estados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordenes_produccion_proceso1' => ['type' => 'foreign', 'columns' => ['proceso_id'], 'references' => ['proceso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_prioridades1' => ['type' => 'foreign', 'columns' => ['prioridade_id'], 'references' => ['prioridades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_categorias1' => ['type' => 'foreign', 'columns' => ['categoria_id'], 'references' => ['categorias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'referencia' => 'Lorem ipsum dolor sit amet',
            'cantidad' => 1,
            'defectuosos' => 1,
            'fecha_creacion' => '2017-09-05 11:15:39',
            'fecha_terminacion' => '2017-09-05 11:15:39',
            'estado_id' => 1,
            'centro_id' => 1,
            'proceso_id' => 1,
            'coste_operario' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'prioridade_id' => 1,
            'atributos' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'categoria_id' => 1
        ],
    ];
}
