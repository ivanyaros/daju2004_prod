<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosEnEstadosOrdenFixture
 *
 */
class UsuariosEnEstadosOrdenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuarios_en_estados_orden';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'estados_de_orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'parte' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_usuarios_en_estados_orden_estados_de_ordens1_idx' => ['type' => 'index', 'columns' => ['estados_de_orden_id'], 'length' => []],
            'fk_usuarios_en_estados_orden_usuarios1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_usuarios_en_estados_orden_estados_de_ordens1' => ['type' => 'foreign', 'columns' => ['estados_de_orden_id'], 'references' => ['estados_de_ordens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_usuarios_en_estados_orden_usuarios1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'estados_de_orden_id' => 1,
            'user_id' => 1,
            'parte' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
