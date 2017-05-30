<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosEnEstadosOrdenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosEnEstadosOrdenTable Test Case
 */
class UsuariosEnEstadosOrdenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosEnEstadosOrdenTable
     */
    public $UsuariosEnEstadosOrden;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios_en_estados_orden',
        'app.estados_de_ordens',
        'app.ordens',
        'app.estados',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.envios_objetos',
        'app.proveedores_material',
        'app.prioridades',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.utensilios_usados',
        'app.utensilios',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuariosEnEstadosOrden') ? [] : ['className' => 'App\Model\Table\UsuariosEnEstadosOrdenTable'];
        $this->UsuariosEnEstadosOrden = TableRegistry::get('UsuariosEnEstadosOrden', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuariosEnEstadosOrden);

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
