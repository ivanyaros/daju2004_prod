<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moneda Entity
 *
 * @property int $id
 * @property string $name
 * @property float $valor
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Material[] $material
 * @property \App\Model\Entity\Proceso[] $proceso
 * @property \App\Model\Entity\Producto[] $producto
 */
class Moneda extends Entity
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
