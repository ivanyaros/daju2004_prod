<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcesoProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcesoProductoTable Test Case
 */
class ProcesoProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcesoProductoTable
     */
    public $ProcesoProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proceso_producto',
        'app.proceso',
        'app.familias',
        'app.material',
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
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.materiales',
        'app.localizaciones',
        'app.objetos_materiales',
        'app.proceso_material'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProcesoProducto') ? [] : ['className' => 'App\Model\Table\ProcesoProductoTable'];
        $this->ProcesoProducto = TableRegistry::get('ProcesoProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProcesoProducto);

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
