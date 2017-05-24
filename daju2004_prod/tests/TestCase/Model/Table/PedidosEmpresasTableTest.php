<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosEmpresasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosEmpresasTable Test Case
 */
class PedidosEmpresasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosEmpresasTable
     */
    public $PedidosEmpresas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_empresas',
        'app.proveedores_clientes',
        'app.pedidos_productos_detalle',
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
        $config = TableRegistry::exists('PedidosEmpresas') ? [] : ['className' => 'App\Model\Table\PedidosEmpresasTable'];
        $this->PedidosEmpresas = TableRegistry::get('PedidosEmpresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosEmpresas);

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
