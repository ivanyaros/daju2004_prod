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
        'app.users',
        'app.utensilios_usados',
        'app.utensilios',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.envios_objetos',
        'app.proveedores_material'
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
