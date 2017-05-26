<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Centro Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property string $direccion
 * @property string $observaciones
 *
 * @property \App\Model\Entity\EntradasDeMateriale[] $entradas_de_materiales
 * @property \App\Model\Entity\Envio[] $envios
 * @property \App\Model\Entity\Localizacione[] $localizaciones
 * @property \App\Model\Entity\Orden[] $ordens
 * @property \App\Model\Entity\Proceso[] $proceso
 */
class Centro extends Entity
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
    return '('.$this->_properties['id'].')'.$this->_properties['name'];
    }
    /*protected function _getLabel()
    {
    return $this->_properties['first_name'] . ' ' . $this->_properties['last_name']
      . ' / ' . __('User ID %s', $this->_properties['user_id']);
    }*/
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
