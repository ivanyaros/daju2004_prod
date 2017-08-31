<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property string $nombre
 *
 * @property \App\Model\Entity\Orden[] $ordens
 * @property \App\Model\Entity\User[] $users
 */
class Categoria extends Entity
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
