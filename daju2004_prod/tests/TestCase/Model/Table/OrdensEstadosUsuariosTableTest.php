<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdensEstadosUsuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdensEstadosUsuariosTable Test Case
 */
class OrdensEstadosUsuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdensEstadosUsuariosTable
     */
    public $OrdensEstadosUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordens_estados_usuarios',
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
        'app.proceso_material',
        'app.proceso_producto',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.objetos_materiales',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
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
        $config = TableRegistry::exists('OrdensEstadosUsuarios') ? [] : ['className' => 'App\Model\Table\OrdensEstadosUsuariosTable'];
        $this->OrdensEstadosUsuarios = TableRegistry::get('OrdensEstadosUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdensEstadosUsuarios);

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
