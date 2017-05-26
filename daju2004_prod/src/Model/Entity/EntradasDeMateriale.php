<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EntradasDeMateriale Entity
 *
 * @property int $id
 * @property int $proveedores_cliente_id
 * @property string $referencia
 * @property string $observaciones
 * @property string $albaran
 * @property \Cake\I18n\FrozenTime $fecha_envio
 * @property int $centro_id
 * @property \Cake\I18n\FrozenTime $fecha_recepcion
 *
 * @property \App\Model\Entity\ProveedoresCliente $proveedores_cliente
 * @property \App\Model\Entity\Centro $centro
 * @property \App\Model\Entity\Materiale[] $materiales
 */
class EntradasDeMateriale extends Entity
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
