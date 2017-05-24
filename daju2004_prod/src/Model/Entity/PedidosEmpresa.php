<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosEmpresa Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $referencia
 * @property int $proveedores_cliente_id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property string $albaran
 * @property string $observaciones
 * @property bool $terminado
 *
 * @property \App\Model\Entity\ProveedoresCliente $proveedores_cliente
 * @property \App\Model\Entity\PedidosProductosDetalle[] $pedidos_productos_detalle
 * @property \App\Model\Entity\SalidasObjeto[] $salidas_objetos
 */
class PedidosEmpresa extends Entity
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
