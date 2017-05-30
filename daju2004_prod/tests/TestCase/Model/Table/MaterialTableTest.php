<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialTable Test Case
 */
class MaterialTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialTable
     */
    public $Material;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.material',
        'app.familias',
        'app.proceso',
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
        'app.envios_objetos',
        'app.proveedores_material',
        'app.materiales',
        'app.localizaciones',
        'app.materiales_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Material') ? [] : ['className' => 'App\Model\Table\MaterialTable'];
        $this->Material = TableRegistry::get('Material', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Material);

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
