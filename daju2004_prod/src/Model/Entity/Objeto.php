<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Objeto Entity
 *
 * @property int $id
 * @property string $name
 * @property int $producto_id
 * @property int $numero_serie
 * @property string $referencia
 * @property int $orden_id
 * @property string $lote
 * @property int $localizacione_id
 * @property float $coste
 * @property int $defectuosos
 * @property float $peso
 * @property string $observaciones
 * @property int $envio_id
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Orden $orden
 * @property \App\Model\Entity\Localizacione $localizacione
 * @property \App\Model\Entity\Envio $envio
 * @property \App\Model\Entity\MaterialesEntrada[] $materiales_entrada
 * @property \App\Model\Entity\ObjetosEntrada[] $objetos_entrada
 */
class Objeto extends Entity
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
