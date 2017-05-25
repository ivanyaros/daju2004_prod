<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnviosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnviosTable Test Case
 */
class EnviosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnviosTable
     */
    public $Envios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.envios',
        'app.proveedores_clientes',
        'app.pedidos_empresas',
        'app.centros',
        'app.entradas_de_materiales',
        'app.localizaciones',
        'app.ordens',
        'app.proceso',
        'app.direcciones',
        'app.objetos',
        'app.envios_objetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Envios') ? [] : ['className' => 'App\Model\Table\EnviosTable'];
        $this->Envios = TableRegistry::get('Envios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Envios);

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
