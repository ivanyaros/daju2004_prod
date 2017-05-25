<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialesEntradaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialesEntradaTable Test Case
 */
class MaterialesEntradaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialesEntradaTable
     */
    public $MaterialesEntrada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiales_entrada',
        'app.objetos',
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
        'app.envios_objetos',
        'app.ordens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialesEntrada') ? [] : ['className' => 'App\Model\Table\MaterialesEntradaTable'];
        $this->MaterialesEntrada = TableRegistry::get('MaterialesEntrada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialesEntrada);

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
