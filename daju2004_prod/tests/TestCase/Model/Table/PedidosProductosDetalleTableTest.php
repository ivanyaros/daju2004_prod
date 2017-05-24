<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosProductosDetalleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosProductosDetalleTable Test Case
 */
class PedidosProductosDetalleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosProductosDetalleTable
     */
    public $PedidosProductosDetalle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_productos_detalle',
        'app.pedidos_empresas',
        'app.proveedores_clientes',
        'app.salidas_objetos',
        'app.producto',
        'app.prioridades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PedidosProductosDetalle') ? [] : ['className' => 'App\Model\Table\PedidosProductosDetalleTable'];
        $this->PedidosProductosDetalle = TableRegistry::get('PedidosProductosDetalle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosProductosDetalle);

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
