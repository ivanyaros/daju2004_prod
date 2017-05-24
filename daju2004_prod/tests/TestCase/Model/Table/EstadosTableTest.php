<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadosTable Test Case
 */
class EstadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadosTable
     */
    public $Estados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estados',
        'app.ordens',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
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
        'app.objetos_entrada',
        'app.entradas',
        'app.salidas',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto',
        'app.prioridades',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.ordens_estados',
        'app.ordens_estados_maquinas',
        'app.usuarios_en_estados_orden',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios_usados',
        'app.utensilios',
        'app.ordens_estados_utensilios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estados') ? [] : ['className' => 'App\Model\Table\EstadosTable'];
        $this->Estados = TableRegistry::get('Estados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estados);

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
}
