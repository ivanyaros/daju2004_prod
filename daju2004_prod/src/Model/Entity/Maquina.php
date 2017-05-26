<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maquina Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property string $observaciones
 * @property float $coste_operacion
 * @property float $coste_tiempo
 *
 * @property \App\Model\Entity\MaquinasUsada[] $maquinas_usadas
 */
class Maquina extends Entity
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
