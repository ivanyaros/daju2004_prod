<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materiale Entity
 *
 * @property int $id
 * @property int $material_id
 * @property \Cake\I18n\FrozenTime $fecha_entega
 * @property int $localizacione_id
 * @property int $entradas_material_id
 * @property bool $bobina_lote
 * @property int $bobinas
 * @property string $lote
 * @property int $numero_bobina
 * @property int $taras
 * @property float $metros_brutos
 * @property float $metros_netos
 * @property float $metros_actuales
 * @property float $metros_utiles
 * @property float $scrap
 * @property bool $en_uso
 * @property bool $terminado
 * @property float $peso_ud
 *
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\Localizacione $localizacione
 * @property \App\Model\Entity\EntradasMaterial $entradas_material
 * @property \App\Model\Entity\Objeto[] $objetos
 * @property \App\Model\Entity\ObjetosMateriale[] $objetos_materiales
 */
class Materiale extends Entity
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
