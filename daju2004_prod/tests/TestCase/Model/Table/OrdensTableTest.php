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
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.envios',
        'app.pedidos_empresas',
        'app.direcciones',
        'app.objetos',
        'app.producto',
        'app.localizaciones',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.materiales_entrada',
        'app.envios_objetos',
        'app.prioridades'
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
