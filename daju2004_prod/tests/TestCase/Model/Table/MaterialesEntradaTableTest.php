<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialesEntradaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialesEntradaTable Test Case
 */
class MaterialesEntradaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialesEntradaTable
     */
    public $MaterialesEntrada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiales_entrada',
        'app.objetos',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.direcciones',
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
        'app.users',
        'app.utensilios_usados',
        'app.utensilios',
        'app.paradas',
        'app.paradas_tipo',
        'app.tareas',
        'app.subproceso',
        'app.proveedores_material',
        'app.materiales',
        'app.localizaciones',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.objetos_entrada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialesEntrada') ? [] : ['className' => 'App\Model\Table\MaterialesEntradaTable'];
        $this->MaterialesEntrada = TableRegistry::get('MaterialesEntrada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialesEntrada);

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
