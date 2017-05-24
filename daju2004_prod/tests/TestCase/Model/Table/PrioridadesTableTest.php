<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrioridadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrioridadesTable Test Case
 */
class PrioridadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrioridadesTable
     */
    public $Prioridades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prioridades',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
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
        'app.proceso_material_entrada',
        'app.proveedores_material',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.salidas_objetos',
        'app.pedidos_productos_detalle',
        'app.pedidos_empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prioridades') ? [] : ['className' => 'App\Model\Table\PrioridadesTable'];
        $this->Prioridades = TableRegistry::get('Prioridades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prioridades);

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
