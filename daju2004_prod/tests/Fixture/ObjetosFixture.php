<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ObjetosFixture
 *
 */
class ObjetosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'producto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero_serie' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencia' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lote' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'localizacione_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'coste' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'defectuosos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'peso' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'envio_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_productos_producto1_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_objetos_ordens1_idx' => ['type' => 'index', 'columns' => ['orden_id'], 'length' => []],
            'fk_objetos_localizaciones1_idx' => ['type' => 'index', 'columns' => ['localizacione_id'], 'length' => []],
            'fk_objetos_envios1_idx' => ['type' => 'index', 'columns' => ['envio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_productos_producto1' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['producto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_objetos_ordens1' => ['type' => 'foreign', 'columns' => ['orden_id'], 'references' => ['ordens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_objetos_localizaciones1' => ['type' => 'foreign', 'columns' => ['localizacione_id'], 'references' => ['localizaciones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_objetos_envios1' => ['type' => 'foreign', 'columns' => ['envio_id'], 'references' => ['envios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'producto_id' => 1,
            'numero_serie' => 1,
            'referencia' => 'Lorem ipsum dolor sit amet',
            'cantidad' => 1,
            'orden_id' => 1,
            'lote' => 'Lorem ipsum dolor sit amet',
            'localizacione_id' => 1,
            'coste' => 1,
            'defectuosos' => 1,
            'peso' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'envio_id' => 1
        ],
    ];
}
