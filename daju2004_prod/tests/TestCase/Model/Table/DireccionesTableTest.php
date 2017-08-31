<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DireccionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DireccionesTable Test Case
 */
class DireccionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DireccionesTable
     */
    public $Direcciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.direcciones',
        'app.proveedores_clientes',
        'app.entradas_de_materiales',
        'app.centros',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.ordens',
        'app.estados',
        'app.prioridades',
        'app.categorias',
        'app.users',
        'app.usuarios_en_tareas',
        'app.tareas',
        'app.subproceso',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.utensilios_usados',
        'app.utensilios',
        'app.objetos',
        'app.localizaciones',
        'app.materiales',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.paradas',
        'app.paradas_tipo',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
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
        $config = TableRegistry::exists('Direcciones') ? [] : ['className' => 'App\Model\Table\DireccionesTable'];
        $this->Direcciones = TableRegistry::get('Direcciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Direcciones);

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
