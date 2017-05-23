<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetosMaterialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetosMaterialesTable Test Case
 */
class ObjetosMaterialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetosMaterialesTable
     */
    public $ObjetosMateriales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos_materiales',
        'app.objetos',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.materiales',
        'app.localizaciones',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ObjetosMateriales') ? [] : ['className' => 'App\Model\Table\ObjetosMaterialesTable'];
        $this->ObjetosMateriales = TableRegistry::get('ObjetosMateriales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ObjetosMateriales);

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
