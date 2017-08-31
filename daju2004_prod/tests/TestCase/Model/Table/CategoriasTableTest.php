<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasTable Test Case
 */
class CategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasTable
     */
    public $Categorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias',
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
        'app.utensilios_usados',
        'app.utensilios',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.proveedores_material',
        'app.prioridades',
        'app.paradas',
        'app.paradas_tipo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categorias') ? [] : ['className' => 'App\Model\Table\CategoriasTable'];
        $this->Categorias = TableRegistry::get('Categorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categorias);

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
