<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedoresClientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedoresClientesTable Test Case
 */
class ProveedoresClientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedoresClientesTable
     */
    public $ProveedoresClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.centros',
        'app.entradas_de_materiales',
        'app.materiales',
        'app.localizaciones',
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
        'app.paradas',
        'app.paradas_tipo',
        'app.tareas',
        'app.subproceso',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
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
        $config = TableRegistry::exists('ProveedoresClientes') ? [] : ['className' => 'App\Model\Table\ProveedoresClientesTable'];
        $this->ProveedoresClientes = TableRegistry::get('ProveedoresClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProveedoresClientes);

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
