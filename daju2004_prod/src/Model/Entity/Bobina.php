<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bobina Entity
 *
 * @property int $id
 * @property string $lote
 * @property int $numero
 * @property int $taras
 * @property float $metros_brutos
 * @property float $metros_netos
 * @property float $metros_actuales
 * @property float $metros_utiles
 * @property float $scrap
 * @property bool $en_uso
 */
class Bobina extends Entity
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
