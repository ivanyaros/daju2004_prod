<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosEmpresasProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosEmpresasProductoTable Test Case
 */
class PedidosEmpresasProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosEmpresasProductoTable
     */
    public $PedidosEmpresasProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_empresas_producto',
        'app.pedidos_empresas',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.entradas_material',
        'app.centros',
        'app.localizaciones',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.objetos_materiales',
        'app.proceso_producto',
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
        $config = TableRegistry::exists('PedidosEmpresasProducto') ? [] : ['className' => 'App\Model\Table\PedidosEmpresasProductoTable'];
        $this->PedidosEmpresasProducto = TableRegistry::get('PedidosEmpresasProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosEmpresasProducto);

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
