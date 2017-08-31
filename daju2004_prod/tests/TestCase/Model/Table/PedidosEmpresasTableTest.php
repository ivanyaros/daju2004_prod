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
        'app.direcciones',
        'app.envios',
        'app.centros',
        'app.entradas_de_materiales',
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
        'app.prioridades',
        'app.pedidos_productos_detalle',
        'app.categorias',
        'app.users',
        'app.usuarios_en_tareas',
        'app.tareas',
        'app.subproceso',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.utensilios_usados',
        'app.utensilios',
        'app.paradas',
        'app.paradas_tipo',
        'app.localizaciones',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada',
        'app.proveedores_material'
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
