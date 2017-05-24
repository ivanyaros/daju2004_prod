<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaquinasUsadasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaquinasUsadasTable Test Case
 */
class MaquinasUsadasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaquinasUsadasTable
     */
    public $MaquinasUsadas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maquinas_usadas',
        'app.estados_de_ordens',
        'app.ordens',
        'app.estados',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.maquinas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaquinasUsadas') ? [] : ['className' => 'App\Model\Table\MaquinasUsadasTable'];
        $this->MaquinasUsadas = TableRegistry::get('MaquinasUsadas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaquinasUsadas);

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
