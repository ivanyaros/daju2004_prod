<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccione Entity
 *
 * @property int $id
 * @property int $proveedores_cliente_id
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $correo
 * @property string $pagina_web
 * @property string $observaciones
 *
 * @property \App\Model\Entity\ProveedoresCliente $proveedores_cliente
 */
class Direccione extends Entity
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
        'id' => false,
        'proveedores_cliente_id' => false
    ];
}
