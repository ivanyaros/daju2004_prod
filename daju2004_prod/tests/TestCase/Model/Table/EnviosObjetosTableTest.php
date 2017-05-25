<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnviosObjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnviosObjetosTable Test Case
 */
class EnviosObjetosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnviosObjetosTable
     */
    public $EnviosObjetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.envios_objetos',
        'app.envios',
        'app.proveedores_clientes',
        'app.pedidos_empresas',
        'app.centros',
        'app.entradas_de_materiales',
        'app.localizaciones',
        'app.ordens',
        'app.proceso',
        'app.direcciones',
        'app.objetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EnviosObjetos') ? [] : ['className' => 'App\Model\Table\EnviosObjetosTable'];
        $this->EnviosObjetos = TableRegistry::get('EnviosObjetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EnviosObjetos);

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
