<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcesoMaterialEntradaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcesoMaterialEntradaTable Test Case
 */
class ProcesoMaterialEntradaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcesoMaterialEntradaTable
     */
    public $ProcesoMaterialEntrada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proceso_material_entrada',
        'app.proceso',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.users',
        'app.utensilios_usados',
        'app.utensilios',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.prioridades',
        'app.proveedores_material',
        'app.materiales',
        'app.localizaciones',
        'app.materiales_entrada',
        'app.paradas',
        'app.paradas_tipo',
        'app.tareas',
        'app.subproceso',
        'app.objetos_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProcesoMaterialEntrada') ? [] : ['className' => 'App\Model\Table\ProcesoMaterialEntradaTable'];
        $this->ProcesoMaterialEntrada = TableRegistry::get('ProcesoMaterialEntrada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProcesoMaterialEntrada);

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
