<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaquinasUsada Entity
 *
 * @property int $id
 * @property int $estados_de_orden_id
 * @property int $maquina_id
 * @property int $operaciones
 * @property float $uso
 * @property string $observaciones
 *
 * @property \App\Model\Entity\EstadosDeOrden $estados_de_orden
 * @property \App\Model\Entity\Maquina $maquina
 */
class MaquinasUsada extends Entity
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
