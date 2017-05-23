<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdensEstadosUtensiliosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdensEstadosUtensiliosTable Test Case
 */
class OrdensEstadosUtensiliosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdensEstadosUtensiliosTable
     */
    public $OrdensEstadosUtensilios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordens_estados_utensilios',
        'app.ordens_estados',
        'app.ordens',
        'app.estados',
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
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.objetos_materiales',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
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
        $config = TableRegistry::exists('OrdensEstadosUtensilios') ? [] : ['className' => 'App\Model\Table\OrdensEstadosUtensiliosTable'];
        $this->OrdensEstadosUtensilios = TableRegistry::get('OrdensEstadosUtensilios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdensEstadosUtensilios);

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
