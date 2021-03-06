<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnviosObjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnviosObjetosTable Test Case
 */
class EnviosObjetosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnviosObjetosTable
     */
    public $EnviosObjetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.envios_objetos',
        'app.envios',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.entradas_de_materiales',
        'app.centros',
        'app.localizaciones',
        'app.materiales',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.monedas',
        'app.producto',
        'app.ivas',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_estados_orden',
        'app.users',
        'app.utensilios_usados',
        'app.utensilios',
        'app.prioridades',
        'app.pedidos_productos_detalle',
        'app.pedidos_empresas',
        'app.materiales_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada',
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
        $config = TableRegistry::exists('EnviosObjetos') ? [] : ['className' => 'App\Model\Table\EnviosObjetosTable'];
        $this->EnviosObjetos = TableRegistry::get('EnviosObjetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EnviosObjetos);

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
