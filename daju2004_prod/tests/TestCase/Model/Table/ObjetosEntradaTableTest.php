<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObjetosEntradaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObjetosEntradaTable Test Case
 */
class ObjetosEntradaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ObjetosEntradaTable
     */
    public $ObjetosEntrada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.objetos_entrada',
        'app.entradas',
        'app.producto',
        'app.familias',
        'app.material',
        'app.monedas',
        'app.proceso',
        'app.ivas',
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
        'app.objetos',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
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
        'app.materiales_entrada',
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.salidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ObjetosEntrada') ? [] : ['className' => 'App\Model\Table\ObjetosEntradaTable'];
        $this->ObjetosEntrada = TableRegistry::get('ObjetosEntrada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ObjetosEntrada);

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
