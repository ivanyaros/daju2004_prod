<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnviosObjetosFixture
 *
 */
class EnviosObjetosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'envio_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'objeto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_envios_has_objetos_objetos1_idx' => ['type' => 'index', 'columns' => ['objeto_id'], 'length' => []],
            'fk_envios_has_objetos_envios1_idx' => ['type' => 'index', 'columns' => ['envio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_envios_has_objetos_envios1' => ['type' => 'foreign', 'columns' => ['envio_id'], 'references' => ['envios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_envios_has_objetos_objetos1' => ['type' => 'foreign', 'columns' => ['objeto_id'], 'references' => ['objetos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'envio_id' => 1,
            'objeto_id' => 1
        ],
    ];
}
