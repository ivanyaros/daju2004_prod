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
        'app.tareas',
        'app.subproceso',
        'app.proceso',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.centros',
        'app.entradas_de_materiales',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.envios',
        'app.pedidos_empresas',
        'app.pedidos_productos_detalle',
        'app.prioridades',
        'app.proveedores_material',
        'app.materiales',
        'app.localizaciones',
        'app.materiales_entrada',
        'app.categorias',
        'app.users',
        'app.usuarios_en_tareas',
        'app.paradas',
        'app.paradas_tipo',
        'app.objetos_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada',
        'app.utensilios_usados',
        'app.utensilios',
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
