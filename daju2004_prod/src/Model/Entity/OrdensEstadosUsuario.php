<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdensEstadosUsuario Entity
 *
 * @property int $id
 * @property int $ordens_estado_id
 * @property int $usuario_id
 * @property float $parte
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\OrdensEstado $ordens_estado
 */
class OrdensEstadosUsuario extends Entity
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
