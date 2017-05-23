<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BobinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BobinasTable Test Case
 */
class BobinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BobinasTable
     */
    public $Bobinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bobinas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bobinas') ? [] : ['className' => 'App\Model\Table\BobinasTable'];
        $this->Bobinas = TableRegistry::get('Bobinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bobinas);

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
