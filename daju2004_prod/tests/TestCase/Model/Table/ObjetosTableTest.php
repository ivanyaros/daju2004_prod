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
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
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
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.proceso_material',
        'app.proceso_producto'
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
