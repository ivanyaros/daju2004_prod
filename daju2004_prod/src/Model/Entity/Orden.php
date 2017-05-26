<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orden Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property int $cantidad
 * @property \Cake\I18n\FrozenTime $fecha_creacion
 * @property \Cake\I18n\FrozenTime $fecha_terminacion
 * @property int $estado_id
 * @property int $centro_id
 * @property int $proceso_id
 * @property float $scrap
 * @property float $coste_operario
 * @property string $observaciones
 * @property int $prioridade_id
 *
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Centro $centro
 * @property \App\Model\Entity\Proceso $proceso
 * @property \App\Model\Entity\Prioridade $prioridade
 * @property \App\Model\Entity\EstadosDeOrden[] $estados_de_ordens
 * @property \App\Model\Entity\Objeto[] $objetos
 */
class Orden extends Entity
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
