<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntradasDeMaterialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntradasDeMaterialesTable Test Case
 */
class EntradasDeMaterialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntradasDeMaterialesTable
     */
    public $EntradasDeMateriales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.centros',
        'app.localizaciones',
        'app.materiales',
        'app.materiales_entrada',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.usuarios',
        'app.utensilios_usados',
        'app.utensilios',
        'app.prioridades',
        'app.envios_objetos',
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
        $config = TableRegistry::exists('EntradasDeMateriales') ? [] : ['className' => 'App\Model\Table\EntradasDeMaterialesTable'];
        $this->EntradasDeMateriales = TableRegistry::get('EntradasDeMateriales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntradasDeMateriales);

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
