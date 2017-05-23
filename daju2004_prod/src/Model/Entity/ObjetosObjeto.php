<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ObjetosObjeto Entity
 *
 * @property int $id
 * @property int $entrada
 * @property int $salida
 * @property int $cantidad_producida
 * @property int $cantidad_gastada
 * @property string $observaciones
 */
class ObjetosObjeto extends Entity
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
