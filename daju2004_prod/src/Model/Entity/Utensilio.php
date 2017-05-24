<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Utensilio Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $referencia
 * @property string $observaciones
 *
 * @property \App\Model\Entity\UtensiliosUsado[] $utensilios_usados
 */
class Utensilio extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected function _getLabel()
    {
    return $this->_properties['nombre'] . ' ' . $this->_properties['referencia'];
    }
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
