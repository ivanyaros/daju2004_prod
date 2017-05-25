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
 * @property bool $proveedor_cliente
 * @property bool $visible
 * @property string $persona_contacto
 *
 * @property \App\Model\Entity\Direccione[] $direcciones
 * @property \App\Model\Entity\EntradasDeMateriale[] $entradas_de_materiales
 * @property \App\Model\Entity\Envio[] $envios
 * @property \App\Model\Entity\PedidosEmpresa[] $pedidos_empresas
 * @property \App\Model\Entity\ProveedoresMaterial[] $proveedores_material
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
