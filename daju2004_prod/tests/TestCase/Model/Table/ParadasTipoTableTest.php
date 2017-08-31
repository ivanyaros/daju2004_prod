<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParadasTipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParadasTipoTable Test Case
 */
class ParadasTipoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParadasTipoTable
     */
    public $ParadasTipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paradas_tipo',
        'app.paradas',
        'app.ordens',
        'app.estados',
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
        'app.subproceso',
        'app.tareas',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.usuarios_en_tareas',
        'app.users',
        'app.categorias',
        'app.utensilios_usados',
        'app.utensilios',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.proveedores_material',
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
        $config = TableRegistry::exists('ParadasTipo') ? [] : ['className' => 'App\Model\Table\ParadasTipoTable'];
        $this->ParadasTipo = TableRegistry::get('ParadasTipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ParadasTipo);

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
