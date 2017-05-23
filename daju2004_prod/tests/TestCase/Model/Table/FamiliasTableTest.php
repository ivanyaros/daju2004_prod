<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliasTable Test Case
 */
class FamiliasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliasTable
     */
    public $Familias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.producto',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
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
        'app.objetos_materiales',
        'app.proceso_producto',
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
        $config = TableRegistry::exists('Familias') ? [] : ['className' => 'App\Model\Table\FamiliasTable'];
        $this->Familias = TableRegistry::get('Familias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Familias);

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
