<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $login
 * @property string $pass
 * @property string $email
 * @property string $direccion
 * @property string $tipo
 *
 * @property \App\Model\Entity\OrdensEstadosUsuario[] $ordens_estados_usuarios
 * @property \App\Model\Entity\OrdensEstado[] $ordens_estados
 */
class Usuario extends Entity
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
