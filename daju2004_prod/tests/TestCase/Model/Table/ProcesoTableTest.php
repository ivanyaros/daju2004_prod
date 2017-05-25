<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcesoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcesoTable Test Case
 */
class ProcesoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcesoTable
     */
    public $Proceso;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Proceso') ? [] : ['className' => 'App\Model\Table\ProcesoTable'];
        $this->Proceso = TableRegistry::get('Proceso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Proceso);

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
