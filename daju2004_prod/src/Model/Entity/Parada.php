<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parada Entity
 *
 * @property int $id
 * @property int $paradas_tipo_id
 * @property int $orden_id
 * @property int $duracion
 * @property string $comentario
 *
 * @property \App\Model\Entity\ParadasTipo $paradas_tipo
 * @property \App\Model\Entity\Orden $orden
 */
class Parada extends Entity
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
