<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsuariosEnEstadosOrdenController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsuariosEnEstadosOrdenController Test Case
 */
class UsuariosEnEstadosOrdenControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios_en_estados_orden',
        'app.estados_de_ordens',
        'app.ordens',
        'app.estados',
        'app.ordens_estados',
        'app.ordens_estados_maquinas',
        'app.maquinas',
        'app.ordens_estados_usuarios',
        'app.usuarios',
        'app.ordens_estados_utensilios',
        'app.utensilios',
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
        'app.proceso_material_entrada',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.materiales',
        'app.localizaciones',
        'app.objetos',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.entradas',
        'app.salidas',
        'app.proveedores_clientes_material',
        'app.pedidos_empresas_producto',
        'app.prioridades',
        'app.maquinas_usadas',
        'app.utensilios_usados'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
