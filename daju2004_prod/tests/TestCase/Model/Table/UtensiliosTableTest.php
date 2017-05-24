<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UtensiliosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UtensiliosTable Test Case
 */
class UtensiliosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UtensiliosTable
     */
    public $Utensilios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.utensilios',
        'app.ordens_estados',
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
        $config = TableRegistry::exists('Utensilios') ? [] : ['className' => 'App\Model\Table\UtensiliosTable'];
        $this->Utensilios = TableRegistry::get('Utensilios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Utensilios);

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
}
