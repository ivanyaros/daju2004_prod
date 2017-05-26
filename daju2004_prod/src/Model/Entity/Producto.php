<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $name
 * @property string $referencia
 * @property string $referencia_proveedor
 * @property int $familia_id
 * @property float $precio
 * @property int $moneda_id
 * @property int $iva_id
 * @property string $observaciones
 * @property bool $visible
 * @property float $peso
 * @property int $cantidad
 * @property string $descripcion
 * @property string $larga
 * @property float $coste
 * @property float $ancho
 * @property float $largo
 * @property float $tolerancia
 *
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\Moneda $moneda
 * @property \App\Model\Entity\Iva $iva
 * @property \App\Model\Entity\Objeto[] $objetos
 * @property \App\Model\Entity\PedidosProductosDetalle[] $pedidos_productos_detalle
 * @property \App\Model\Entity\ProcesoProductoEntrada[] $proceso_producto_entrada
 * @property \App\Model\Entity\ProcesoProductoSalida[] $proceso_producto_salida
 */
class Producto extends Entity
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
    protected function _getLabel()
    {
    return '('.$this->_properties['id'].')'.$this->_properties['name'];
    }
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
