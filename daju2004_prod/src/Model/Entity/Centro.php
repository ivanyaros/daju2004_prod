<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Centro Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $referencia
 * @property string $direccion
 * @property string $centroscol
 *
 * @property \App\Model\Entity\EntradasMaterial[] $entradas_material
 * @property \App\Model\Entity\Localizacione[] $localizaciones
 * @property \App\Model\Entity\Orden[] $ordens
 * @property \App\Model\Entity\Proceso[] $proceso
 * @property \App\Model\Entity\SalidasObjeto[] $salidas_objetos
 */
class Centro extends Entity
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
