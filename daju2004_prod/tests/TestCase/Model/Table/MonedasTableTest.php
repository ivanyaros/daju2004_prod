<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonedasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonedasTable Test Case
 */
class MonedasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonedasTable
     */
    public $Monedas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monedas',
        'app.material',
        'app.familias',
        'app.proceso',
        'app.ivas',
        'app.producto',
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.centros',
        'app.entradas_material',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.pedidos_empresas',
        'app.salidas_objetos',
        'app.pedidos_empresas_producto',
        'app.proveedores_clientes_material',
        'app.materiales',
        'app.localizaciones',
        'app.materiales_entrada',
        'app.prioridades',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.maquinas',
        'app.ordens_estados_maquinas',
        'app.usuarios_en_estados_orden',
        'app.usuarios',
        'app.ordens_estados_usuarios',
        'app.utensilios_usados',
        'app.utensilios',
        'app.ordens_estados_utensilios',
        'app.objetos_entrada',
        'app.entradas',
        'app.salidas',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Monedas') ? [] : ['className' => 'App\Model\Table\MonedasTable'];
        $this->Monedas = TableRegistry::get('Monedas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Monedas);

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
