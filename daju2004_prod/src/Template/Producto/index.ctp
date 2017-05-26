<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="producto index large-9 medium-8 columns content">
    <h3><?= __('Producto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia_proveedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ancho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tolerancia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producto as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->name) ?></td>
                <td><?= h($producto->referencia) ?></td>
                <td><?= h($producto->referencia_proveedor) ?></td>
                <td><?= $producto->has('familia') ? $this->Html->link($producto->familia->id, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
                <td><?= $this->Number->format($producto->precio) ?></td>
                <td><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->id, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
                <td><?= $producto->has('iva') ? $this->Html->link($producto->iva->id, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
                <td><?= h($producto->observaciones) ?></td>
                <td><?= h($producto->visible) ?></td>
                <td><?= $this->Number->format($producto->peso) ?></td>
                <td><?= $this->Number->format($producto->cantidad) ?></td>
                <td><?= h($producto->descripcion) ?></td>
                <td><?= h($producto->larga) ?></td>
                <td><?= $this->Number->format($producto->coste) ?></td>
                <td><?= $this->Number->format($producto->ancho) ?></td>
                <td><?= $this->Number->format($producto->largo) ?></td>
                <td><?= $this->Number->format($producto->tolerancia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
