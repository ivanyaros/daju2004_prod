<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcesoProductoSalidaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcesoProductoSalidaTable Test Case
 */
class ProcesoProductoSalidaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcesoProductoSalidaTable
     */
    public $ProcesoProductoSalida;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proceso_producto_salida',
        'app.proceso',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.materiales',
        'app.localizaciones',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.prioridades',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.objetos',
        'app.materiales_entrada',
        'app.envios_objetos',
        'app.direcciones',
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.proceso_producto_entrada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProcesoProductoSalida') ? [] : ['className' => 'App\Model\Table\ProcesoProductoSalidaTable'];
        $this->ProcesoProductoSalida = TableRegistry::get('ProcesoProductoSalida', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProcesoProductoSalida);

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
