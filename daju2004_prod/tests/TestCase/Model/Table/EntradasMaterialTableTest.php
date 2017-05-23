<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntradasMaterialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntradasMaterialTable Test Case
 */
class EntradasMaterialTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntradasMaterialTable
     */
    public $EntradasMaterial;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.centros',
        'app.localizaciones',
        'app.ordens',
        'app.proceso',
        'app.salidas_objetos',
        'app.materiales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EntradasMaterial') ? [] : ['className' => 'App\Model\Table\EntradasMaterialTable'];
        $this->EntradasMaterial = TableRegistry::get('EntradasMaterial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntradasMaterial);

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
