<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaquinasUsada Entity
 *
 * @property int $id
 * @property int $tarea_id
 * @property int $maquina_id
 * @property int $operaciones
 * @property float $uso
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Tarea $tarea
 * @property \App\Model\Entity\Maquina $maquina
 */
class MaquinasUsada extends Entity
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
