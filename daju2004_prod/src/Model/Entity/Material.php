<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property string $referencia_proveedor
 * @property int $familia_id
 * @property float $longitud
 * @property float $anchura
 * @property float $profundidad
 * @property string $color
 * @property float $gramaje
 * @property float $peso_ud
 * @property int $unidades_embalaje
 * @property float $precio
 * @property int $moneda_id
 * @property int $iva_id
 * @property string $observaciones
 * @property bool $visible
 *
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\Moneda $moneda
 * @property \App\Model\Entity\Iva $iva
 * @property \App\Model\Entity\Materiale[] $materiales
 * @property \App\Model\Entity\ProcesoMaterialEntrada[] $proceso_material_entrada
 * @property \App\Model\Entity\ProveedoresMaterial[] $proveedores_material
 */
class Material extends Entity
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
