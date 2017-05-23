<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Objeto Entity
 *
 * @property int $id
 * @property int $producto_id
 * @property string $referencia
 * @property int $orden_id
 * @property string $lote
 * @property int $localizacione_id
 * @property float $coste
 * @property int $defectuosos
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Orden $orden
 * @property \App\Model\Entity\Localizacione $localizacione
 * @property \App\Model\Entity\Materiale[] $materiales
 * @property \App\Model\Entity\Objeto[] $objetos
 * @property \App\Model\Entity\ObjetosMateriale[] $objetos_materiales
 * @property \App\Model\Entity\Material[] $material
 */
class Objeto extends Entity
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
