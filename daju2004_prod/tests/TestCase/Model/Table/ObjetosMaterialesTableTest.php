<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetosMaterialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetosMaterialesTable Test Case
 */
class ObjetosMaterialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetosMaterialesTable
     */
    public $ObjetosMateriales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos_materiales',
        'app.objetos',
        'app.producto',
        'app.ordens',
        'app.localizaciones',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.ivas',
        'app.proceso_material',
        'app.proveedores_clientes_material',
        'app.salidas_objetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ObjetosMateriales') ? [] : ['className' => 'App\Model\Table\ObjetosMaterialesTable'];
        $this->ObjetosMateriales = TableRegistry::get('ObjetosMateriales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ObjetosMateriales);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
