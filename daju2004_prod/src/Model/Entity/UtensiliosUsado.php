<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UtensiliosUsado Entity
 *
 * @property int $id
 * @property int $estados_de_orden_id
 * @property int $utensilio_id
 * @property string $observaciones
 *
 * @property \App\Model\Entity\EstadosDeOrden $estados_de_orden
 * @property \App\Model\Entity\Utensilio $utensilio
 */
class UtensiliosUsado extends Entity
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