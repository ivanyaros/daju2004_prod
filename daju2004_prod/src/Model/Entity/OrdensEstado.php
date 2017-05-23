<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdensEstado Entity
 *
 * @property int $id
 * @property int $orden_id
 * @property int $estado_id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_fin
 *
 * @property \App\Model\Entity\Orden $orden
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Maquina[] $maquinas
 * @property \App\Model\Entity\Usuario[] $usuarios
 * @property \App\Model\Entity\Utensilio[] $utensilios
 */
class OrdensEstado extends Entity
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
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
