<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Localizacione Entity
 *
 * @property int $id
 * @property string $name
 * @property int $centro_id
 *
 * @property \App\Model\Entity\Centro $centro
 * @property \App\Model\Entity\Materiale[] $materiales
 * @property \App\Model\Entity\Objeto[] $objetos
 */
class Localizacione extends Entity
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
