<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ObjetosEntradaFixture
 *
 */
class ObjetosEntradaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'objetos_entrada';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'entrada' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'salida' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_producida' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_gastada' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_objetos_has_objetos_objetos2_idx' => ['type' => 'index', 'columns' => ['salida'], 'length' => []],
            'fk_objetos_has_objetos_objetos1_idx' => ['type' => 'index', 'columns' => ['entrada'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_objetos_has_objetos_objetos1' => ['type' => 'foreign', 'columns' => ['entrada'], 'references' => ['objetos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_objetos_has_objetos_objetos2' => ['type' => 'foreign', 'columns' => ['salida'], 'references' => ['objetos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'entrada' => 1,
            'salida' => 1,
            'cantidad_producida' => 1,
            'cantidad_gastada' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
