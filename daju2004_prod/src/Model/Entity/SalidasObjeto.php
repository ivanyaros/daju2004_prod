<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalidasObjeto Entity
 *
 * @property int $id
 * @property int $proveedores_cliente_id
 * @property \Cake\I18n\FrozenTime $fecha_pedido
 * @property \Cake\I18n\FrozenTime $fecha_entrega
 * @property string $albaran
 * @property int $pedidos_empresa_id
 * @property int $centro_id
 *
 * @property \App\Model\Entity\ProveedoresCliente $proveedores_cliente
 * @property \App\Model\Entity\PedidosEmpresa $pedidos_empresa
 * @property \App\Model\Entity\Centro $centro
 */
class SalidasObjeto extends Entity
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
