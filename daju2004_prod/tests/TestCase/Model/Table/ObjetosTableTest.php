<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetosTable Test Case
 */
class ObjetosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetosTable
     */
    public $Objetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos',
        'app.producto',
        'app.ordens',
        'app.localizaciones',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.materiales_entrada',
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
        $config = TableRegistry::exists('Objetos') ? [] : ['className' => 'App\Model\Table\ObjetosTable'];
        $this->Objetos = TableRegistry::get('Objetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Objetos);

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
