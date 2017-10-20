<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialesFixture
 *
 */
class MaterialesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'material_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_entega' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'localizacione_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'entradas_de_materiale_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'bobina' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'bobinas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'bobinas_actual' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lote' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_bobina' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'taras' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'taras_reales' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'taras_mediciones' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'metros_brutos' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'metros_netos' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'metros_actuales' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'metros_utiles' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'scrap' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'en_uso' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'terminado' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'peso_ud' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_materiales_entradas_material1_idx' => ['type' => 'index', 'columns' => ['entradas_de_materiale_id'], 'length' => []],
            'fk_materiales_material1_idx' => ['type' => 'index', 'columns' => ['material_id'], 'length' => []],
            'fk_materiales_localizaciones1_idx' => ['type' => 'index', 'columns' => ['localizacione_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_materiales_entradas_material1' => ['type' => 'foreign', 'columns' => ['entradas_de_materiale_id'], 'references' => ['entradas_de_materiales', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_materiales_material1' => ['type' => 'foreign', 'columns' => ['material_id'], 'references' => ['material', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_materiales_localizaciones1' => ['type' => 'foreign', 'columns' => ['localizacione_id'], 'references' => ['localizaciones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'material_id' => 1,
            'fecha_entega' => '2017-09-05 11:15:38',
            'localizacione_id' => 1,
            'entradas_de_materiale_id' => 1,
            'bobina' => 1,
            'bobinas' => 1,
            'bobinas_actual' => 1,
            'lote' => 'Lorem ipsum dolor sit amet',
            'numero_bobina' => 1,
            'taras' => 1,
            'taras_reales' => 1,
            'taras_mediciones' => 'Lorem ipsum dolor sit amet',
            'metros_brutos' => 1,
            'metros_netos' => 1,
            'metros_actuales' => 1,
            'metros_utiles' => 1,
            'scrap' => 1,
            'en_uso' => 1,
            'terminado' => 1,
            'peso_ud' => 1
        ],
    ];
}
