<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProcesoMaterialEntrada Entity
 *
 * @property int $id
 * @property int $proceso_id
 * @property int $material_id
 * @property float $metros_lineales
 * @property float $metros_cuadrados
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Proceso $proceso
 * @property \App\Model\Entity\Material $material
 */
class ProcesoMaterialEntrada extends Entity
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
