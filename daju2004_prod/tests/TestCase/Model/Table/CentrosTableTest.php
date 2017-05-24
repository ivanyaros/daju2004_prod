<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentrosTable Test Case
 */
class CentrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentrosTable
     */
    public $Centros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.localizaciones',
        'app.materiales',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
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
        $config = TableRegistry::exists('Centros') ? [] : ['className' => 'App\Model\Table\CentrosTable'];
        $this->Centros = TableRegistry::get('Centros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centros);

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
