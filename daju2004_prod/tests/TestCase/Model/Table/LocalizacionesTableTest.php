<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocalizacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocalizacionesTable Test Case
 */
class LocalizacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocalizacionesTable
     */
    public $Localizaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.localizaciones',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.objetos',
        'app.materiales',
        'app.objetos_materiales',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Localizaciones') ? [] : ['className' => 'App\Model\Table\LocalizacionesTable'];
        $this->Localizaciones = TableRegistry::get('Localizaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Localizaciones);

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
