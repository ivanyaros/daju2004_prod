<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadosDeOrdensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadosDeOrdensTable Test Case
 */
class EstadosDeOrdensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadosDeOrdensTable
     */
    public $EstadosDeOrdens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estados_de_ordens',
        'app.ordens',
        'app.estados',
        'app.maquinas_usadas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstadosDeOrdens') ? [] : ['className' => 'App\Model\Table\EstadosDeOrdensTable'];
        $this->EstadosDeOrdens = TableRegistry::get('EstadosDeOrdens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadosDeOrdens);

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
