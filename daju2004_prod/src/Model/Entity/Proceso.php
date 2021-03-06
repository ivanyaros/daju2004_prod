<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proceso Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property int $familia_id
 * @property float $precio
 * @property int $moneda_id
 * @property int $iva_id
 * @property string $observaciones
 * @property bool $visible
 * @property string $enlaces
 * @property int $centro_id
 * @property int $segundos_tiempo
 * @property string $coste_operaciones
 * @property string $descripcion
 * @property string $larga
 * @property string $atributos
 *
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\Moneda $moneda
 * @property \App\Model\Entity\Iva $iva
 * @property \App\Model\Entity\Centro $centro
 * @property \App\Model\Entity\Orden[] $ordens
 * @property \App\Model\Entity\ProcesoMaterialEntrada[] $proceso_material_entrada
 * @property \App\Model\Entity\ProcesoProductoEntrada[] $proceso_producto_entrada
 * @property \App\Model\Entity\ProcesoProductoSalida[] $proceso_producto_salida
 * @property \App\Model\Entity\Subproceso[] $subproceso
 */
class Proceso extends Entity
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
