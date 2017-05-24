<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UtensiliosUsadosFixture
 *
 */
class UtensiliosUsadosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'estados_de_orden_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'utensilio_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_utensilios_usados_estados_de_ordens1_idx' => ['type' => 'index', 'columns' => ['estados_de_orden_id'], 'length' => []],
            'fk_utensilios_usados_utensilios1_idx' => ['type' => 'index', 'columns' => ['utensilio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_utensilios_usados_estados_de_ordens1' => ['type' => 'foreign', 'columns' => ['estados_de_orden_id'], 'references' => ['estados_de_ordens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_utensilios_usados_utensilios1' => ['type' => 'foreign', 'columns' => ['utensilio_id'], 'references' => ['utensilios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'utensilio_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
