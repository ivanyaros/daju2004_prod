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
        'app.ordens_estados',
        'app.prioridades',
        'app.pedidos_empresas_producto',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios_en_estados_orden',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios_usados',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.entradas',
        'app.salidas',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada',
        'app.proveedores_clientes_material'
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
