<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="producto view large-9 medium-8 columns content">
    <h3><?= h($producto->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($producto->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($producto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia Proveedor') ?></th>
            <td><?= h($producto->referencia_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($producto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($producto->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Larga') ?></th>
            <td><?= h($producto->larga) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($producto->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($producto->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste') ?></th>
            <td><?= $this->Number->format($producto->coste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ancho') ?></th>
            <td><?= $this->Number->format($producto->ancho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largo') ?></th>
            <td><?= $this->Number->format($producto->largo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tolerancia') ?></th>
            <td><?= $this->Number->format($producto->tolerancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $producto->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($producto->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Numero Serie') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->name) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->numero_serie) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
                <td><?= h($objetos->peso) ?></td>
                <td><?= h($objetos->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objetos', 'action' => 'view', $objetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objetos', 'action' => 'edit', $objetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objetos', 'action' => 'delete', $objetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?></h4>
        <?php if (!empty($producto->pedidos_productos_detalle)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->pedidos_productos_detalle as $pedidosProductosDetalle): ?>
            <tr>
                <td><?= h($pedidosProductosDetalle->id) ?></td>
                <td><?= h($pedidosProductosDetalle->pedidos_empresa_id) ?></td>
                <td><?= h($pedidosProductosDetalle->producto_id) ?></td>
                <td><?= h($pedidosProductosDetalle->cantidad) ?></td>
                <td><?= h($pedidosProductosDetalle->fecha) ?></td>
                <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
                <td><?= h($pedidosProductosDetalle->prioridade_id) ?></td>
                <td><?= h($pedidosProductosDetalle->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PedidosProductosDetalle', 'action' => 'view', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PedidosProductosDetalle', 'action' => 'edit', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidosProductosDetalle', 'action' => 'delete', $pedidosProductosDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProductosDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Entrada') ?></h4>
        <?php if (!empty($producto->proceso_producto_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->proceso_producto_entrada as $procesoProductoEntrada): ?>
            <tr>
                <td><?= h($procesoProductoEntrada->id) ?></td>
                <td><?= h($procesoProductoEntrada->proceso_id) ?></td>
                <td><?= h($procesoProductoEntrada->producto_id) ?></td>
                <td><?= h($procesoProductoEntrada->cantidad) ?></td>
                <td><?= h($procesoProductoEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'view', $procesoProductoEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'edit', $procesoProductoEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'delete', $procesoProductoEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoSalida" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Salida') ?></h4>
        <?php if (!empty($producto->proceso_producto_salida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->proceso_producto_salida as $procesoProductoSalida): ?>
            <tr>
                <td><?= h($procesoProductoSalida->id) ?></td>
                <td><?= h($procesoProductoSalida->proceso_id) ?></td>
                <td><?= h($procesoProductoSalida->producto_id) ?></td>
                <td><?= h($procesoProductoSalida->cantidad) ?></td>
                <td><?= h($procesoProductoSalida->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoProductoSalida', 'action' => 'view', $procesoProductoSalida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoProductoSalida', 'action' => 'edit', $procesoProductoSalida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoProductoSalida', 'action' => 'delete', $procesoProductoSalida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoSalida->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
</div>
<script>
function openRelated(evt, relatedName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("related");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(relatedName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

