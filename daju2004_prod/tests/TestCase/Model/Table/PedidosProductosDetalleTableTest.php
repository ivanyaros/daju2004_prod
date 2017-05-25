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
        'app.envios',
        'app.centros',
        'app.entradas_de_materiales',
        'app.localizaciones',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.monedas',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.materiales_entrada',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.prioridades',
        'app.envios_objetos',
        'app.direcciones'
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
