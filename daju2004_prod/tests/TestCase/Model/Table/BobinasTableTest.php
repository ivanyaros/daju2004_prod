<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BobinasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BobinasTable Test Case
 */
class BobinasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BobinasTable
     */
    public $Bobinas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bobinas',
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
        'app.ordens_estados',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.localizaciones',
        'app.objetos_materiales',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bobinas') ? [] : ['className' => 'App\Model\Table\BobinasTable'];
        $this->Bobinas = TableRegistry::get('Bobinas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bobinas);

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
