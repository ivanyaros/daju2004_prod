<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialesTable Test Case
 */
class MaterialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialesTable
     */
    public $Materiales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.monedas',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.localizaciones',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.envios',
        'app.pedidos_empresas',
        'app.direcciones',
        'app.objetos',
        'app.envios_objetos',
        'app.ordens',
        'app.materiales_entrada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Materiales') ? [] : ['className' => 'App\Model\Table\MaterialesTable'];
        $this->Materiales = TableRegistry::get('Materiales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Materiales);

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
