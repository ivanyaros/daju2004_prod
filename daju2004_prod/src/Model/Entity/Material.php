<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property string|resource $nombre
 * @property string|resource $referencia
 * @property int $familia_id
 * @property float $longitud
 * @property float $anchura
 * @property float $profundidad
 * @property string|resource $color
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
 * @property \App\Model\Entity\Objeto[] $objetos
 * @property \App\Model\Entity\Proceso[] $proceso
 * @property \App\Model\Entity\ProveedoresCliente[] $proveedores_clientes
 * @property \App\Model\Entity\ProcesoMaterial[] $proceso_material
 * @property \App\Model\Entity\ObjetosMateriale[] $objetos_materiales
 * @property \App\Model\Entity\ProveedoresClientesMaterial[] $proveedores_clientes_material
 */
class Material extends Entity
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
