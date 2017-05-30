<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuariosEnEstadosOrden Entity
 *
 * @property int $id
 * @property int $estados_de_orden_id
 * @property int $user_id
 * @property float $parte
 * @property string $observaciones
 *
 * @property \App\Model\Entity\EstadosDeOrden $estados_de_orden
 * @property \App\Model\Entity\User $user
 */
class UsuariosEnEstadosOrden extends Entity
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
