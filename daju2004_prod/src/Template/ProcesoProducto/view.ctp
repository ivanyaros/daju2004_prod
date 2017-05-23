<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso Producto'), ['action' => 'edit', $procesoProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso Producto'), ['action' => 'delete', $procesoProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="procesoProducto view large-9 medium-8 columns content">
    <h3><?= h($procesoProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProducto->has('proceso') ? $this->Html->link($procesoProducto->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProducto->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProducto->has('producto') ? $this->Html->link($procesoProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProducto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProducto->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada Salida') ?></th>
            <td><?= $procesoProducto->entrada_salida ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
