<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdensTable Test Case
 */
class OrdensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdensTable
     */
    public $Ordens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.producto',
        'app.monedas',
        'app.ivas',
        'app.objetos',
        'app.localizaciones',
        'app.objetos_materiales',
        'app.proceso_material',
        'app.proveedores_clientes_material',
        'app.salidas_objetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ordens') ? [] : ['className' => 'App\Model\Table\OrdensTable'];
        $this->Ordens = TableRegistry::get('Ordens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ordens);

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
