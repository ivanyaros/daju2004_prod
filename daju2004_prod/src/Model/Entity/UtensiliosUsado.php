<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UtensiliosUsado Entity
 *
 * @property int $id
 * @property int $tarea_id
 * @property int $utensilio_id
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Tarea $tarea
 * @property \App\Model\Entity\Utensilio $utensilio
 */
class UtensiliosUsado extends Entity
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
