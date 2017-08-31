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
 * @property int $entradas_de_materiale_id
 * @property bool $bobina
 * @property int $bobinas
 * @property int $bobinas_actual
 * @property string $lote
 * @property int $numero_bobina
 * @property int $taras
 * @property int $taras_reales
 * @property string $taras_mediciones
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
 * @property \App\Model\Entity\EntradasDeMateriale $entradas_de_materiale
 * @property \App\Model\Entity\MaterialesEntrada[] $materiales_entrada
 */
class Materiale extends Entity
{

    /**
     * Fields that can be mass sasigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    
    protected function _getLabel()
    {

            if (!empty($this->_properties['name'])){
                return '('.$this->_properties['id'].')'.$this->_properties['name'];
            }
            return '('.$this->_properties['id'].')';
    }
    
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
