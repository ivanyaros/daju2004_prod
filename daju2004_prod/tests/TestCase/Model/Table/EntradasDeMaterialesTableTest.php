<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntradasDeMaterialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntradasDeMaterialesTable Test Case
 */
class EntradasDeMaterialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntradasDeMaterialesTable
     */
    public $EntradasDeMateriales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.centros',
        'app.envios',
        'app.localizaciones',
        'app.ordens',
        'app.proceso'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EntradasDeMateriales') ? [] : ['className' => 'App\Model\Table\EntradasDeMaterialesTable'];
        $this->EntradasDeMateriales = TableRegistry::get('EntradasDeMateriales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntradasDeMateriales);

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
