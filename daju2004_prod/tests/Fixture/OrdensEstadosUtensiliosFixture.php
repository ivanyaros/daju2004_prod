<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdensEstadosUtensiliosFixture
 *
 */
class OrdensEstadosUtensiliosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ordens_estado_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'utensilio_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_ordens_estados_has_utensilios_utensilios1_idx' => ['type' => 'index', 'columns' => ['utensilio_id'], 'length' => []],
            'fk_ordens_estados_utensilios_ordens_estados1_idx' => ['type' => 'index', 'columns' => ['ordens_estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_ordens_estados_has_utensilios_utensilios1' => ['type' => 'foreign', 'columns' => ['utensilio_id'], 'references' => ['utensilios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ordens_estados_utensilios_ordens_estados1' => ['type' => 'foreign', 'columns' => ['ordens_estado_id'], 'references' => ['ordens_estados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'ordens_estado_id' => 1,
            'utensilio_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
