<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosProductosDetalle Entity
 *
 * @property int $id
 * @property int $pedidos_empresa_id
 * @property int $producto_id
 * @property int $cantidad
 * @property \Cake\I18n\FrozenTime $fecha
 * @property string $observaciones
 * @property int $prioridade_id
 * @property bool $terminado
 *
 * @property \App\Model\Entity\PedidosEmpresa $pedidos_empresa
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Prioridade $prioridade
 */
class PedidosProductosDetalle extends Entity
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
