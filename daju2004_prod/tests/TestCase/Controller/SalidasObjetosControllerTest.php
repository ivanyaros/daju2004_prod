<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SalidasObjetosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SalidasObjetosController Test Case
 */
class SalidasObjetosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salidas_objetos',
        'app.proveedores_clientes',
        'app.direcciones',
        'app.entradas_material',
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
        'app.ordens_estados',
        'app.ordens_estados_maquinas',
        'app.maquinas',
        'app.ordens_estados_usuarios',
        'app.usuarios',
        'app.ordens_estados_utensilios',
        'app.utensilios',
        'app.prioridades',
        'app.pedidos_empresas_producto',
        'app.pedidos_empresas',
        'app.estados_de_ordens',
        'app.maquinas_usadas',
        'app.usuarios_en_estados_orden',
        'app.utensilios_usados',
        'app.materiales_entrada',
        'app.objetos_entrada',
        'app.entradas',
        'app.salidas',
        'app.proceso_producto_entrada',
        'app.proceso_producto_salida',
        'app.proceso_material_entrada',
        'app.proveedores_clientes_material'
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
