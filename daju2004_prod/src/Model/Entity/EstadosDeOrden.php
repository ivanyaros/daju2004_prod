<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstadosDeOrden Entity
 *
 * @property int $id
 * @property int $orden_id
 * @property int $estado_id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_fin
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Orden $orden
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\MaquinasUsada[] $maquinas_usadas
 * @property \App\Model\Entity\UsuariosEnEstadosOrden[] $usuarios_en_estados_orden
 * @property \App\Model\Entity\UtensiliosUsado[] $utensilios_usados
 */
class EstadosDeOrden extends Entity
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
