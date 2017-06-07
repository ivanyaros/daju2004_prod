<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Envio Entity
 *
 * @property int $id
 * @property int $proveedores_cliente_id
 * @property \Cake\I18n\FrozenTime $fecha_pedido
 * @property \Cake\I18n\FrozenTime $fecha_envio
 * @property string $albaran
 * @property int $pedidos_empresa_id
 * @property int $centro_id
 * @property \Cake\I18n\FrozenTime $fecha_entrega
 * @property string $observaciones
 * @property int $direccione_id
 *
 * @property \App\Model\Entity\ProveedoresCliente $proveedores_cliente
 * @property \App\Model\Entity\PedidosEmpresa $pedidos_empresa
 * @property \App\Model\Entity\Centro $centro
 * @property \App\Model\Entity\Direccione $direccione
 * @property \App\Model\Entity\Objeto[] $objetos
 */
class Envio extends Entity
{

    /**
     * Fields that can be mass sasigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    
    protected function _getLabel()
    {

            if (!empty($this->_properties['name'])){
                return '('.$this->_properties['id'].')'.$this->_properties['name'];
            }
            return '('.$this->_properties['id'].')';
    }
    
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
