<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialesEntrada Entity
 *
 * @property int $id
 * @property int $objeto_id
 * @property int $materiale_id
 * @property int $cantidad_producida
 * @property float $metros_gastados
 * @property float $metros_utiles
 * @property float $scrap
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Objeto $objeto
 * @property \App\Model\Entity\Materiale $materiale
 */
class MaterialesEntrada extends Entity
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
