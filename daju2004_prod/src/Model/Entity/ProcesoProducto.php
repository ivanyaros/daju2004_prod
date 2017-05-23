<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProcesoProducto Entity
 *
 * @property int $id
 * @property int $proceso_id
 * @property int $producto_id
 * @property int $cantidad
 * @property bool $entrada_salida
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Proceso $proceso
 */
class ProcesoProducto extends Entity
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
