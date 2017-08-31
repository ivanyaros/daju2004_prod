<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarea Entity
 *
 * @property int $id
 * @property int $subproceso_id
 * @property int $orden_id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property int $segundos_duracion
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Subproceso $subproceso
 * @property \App\Model\Entity\Orden $orden
 * @property \App\Model\Entity\MaquinasUsada[] $maquinas_usadas
 * @property \App\Model\Entity\UsuariosEnTarea[] $usuarios_en_tareas
 * @property \App\Model\Entity\UtensiliosUsado[] $utensilios_usados
 */
class Tarea extends Entity
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
