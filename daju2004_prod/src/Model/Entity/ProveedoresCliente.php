<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProveedoresCliente Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion_fiscal
 * @property string $telefono
 * @property string $fax
 * @property string $correo
 * @property string $pagina_web
 * @property string $NIF_CIF
 * @property string $observaciones
 * @property bool $tipo
 * @property bool $visible
 * @property string $persona_contacto
 *
 * @property \App\Model\Entity\Direccione[] $direcciones
 * @property \App\Model\Entity\EntradasMaterial[] $entradas_material
 * @property \App\Model\Entity\PedidosEmpresa[] $pedidos_empresas
 * @property \App\Model\Entity\SalidasObjeto[] $salidas_objetos
 * @property \App\Model\Entity\Material[] $material
 * @property \App\Model\Entity\ProveedoresClientesMaterial[] $proveedores_clientes_material
 */
class ProveedoresCliente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
