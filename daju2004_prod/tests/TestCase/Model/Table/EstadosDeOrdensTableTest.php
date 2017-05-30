<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadosDeOrdensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadosDeOrdensTable Test Case
 */
class EstadosDeOrdensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadosDeOrdensTable
     */
    public $EstadosDeOrdens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.usuarios_en_estados_orden',
        'app.users',
        'app.utensilios_usados',
        'app.utensilios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstadosDeOrdens') ? [] : ['className' => 'App\Model\Table\EstadosDeOrdensTable'];
        $this->EstadosDeOrdens = TableRegistry::get('EstadosDeOrdens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadosDeOrdens);

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
