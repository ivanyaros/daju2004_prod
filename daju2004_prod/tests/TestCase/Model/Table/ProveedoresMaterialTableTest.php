<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedoresMaterialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedoresMaterialTable Test Case
 */
class ProveedoresMaterialTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedoresMaterialTable
     */
    public $ProveedoresMaterial;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proveedores_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.entradas_material',
        'app.centros',
        'app.localizaciones',
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
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.prioridades',
        'app.pedidos_productos_detalle',
        'app.pedidos_empresas',
        'app.salidas_objetos',
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
        $config = TableRegistry::exists('ProveedoresMaterial') ? [] : ['className' => 'App\Model\Table\ProveedoresMaterialTable'];
        $this->ProveedoresMaterial = TableRegistry::get('ProveedoresMaterial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProveedoresMaterial);

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
