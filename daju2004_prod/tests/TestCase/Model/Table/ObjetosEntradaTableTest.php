<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetosEntradaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetosEntradaTable Test Case
 */
class ObjetosEntradaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetosEntradaTable
     */
    public $ObjetosEntrada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos_entrada',
        'app.objetos',
        'app.producto',
        'app.ordens',
        'app.localizaciones',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.envios',
        'app.pedidos_empresas',
        'app.direcciones',
        'app.envios_objetos',
        'app.proceso',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.monedas',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proveedores_material',
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
        $config = TableRegistry::exists('ObjetosEntrada') ? [] : ['className' => 'App\Model\Table\ObjetosEntradaTable'];
        $this->ObjetosEntrada = TableRegistry::get('ObjetosEntrada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ObjetosEntrada);

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
