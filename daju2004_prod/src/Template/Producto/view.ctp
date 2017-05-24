<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="producto view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($producto->nombre) ?></td>
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
            <td><?= $producto->has('familia') ? $this->Html->link($producto->familia->id, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->id, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $producto->has('iva') ? $this->Html->link($producto->iva->id, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
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
    <div class="related">
        <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($producto->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Numero Serie') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->numero_serie) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
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
    <div class="related">
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
    <div class="related">
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
    <div class="related">
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
