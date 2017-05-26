<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ObjetosEntrada Entity
 *
 * @property int $id
 * @property int $entrada_id
 * @property int $salida_id
 * @property int $cantidad_entrada
 * @property int $cantidad_producida
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Objeto $objeto
 */
class ObjetosEntrada extends Entity
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
