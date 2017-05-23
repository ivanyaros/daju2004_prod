<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso Producto Salida'), ['action' => 'edit', $procesoProductoSalida->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso Producto Salida'), ['action' => 'delete', $procesoProductoSalida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoSalida->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="procesoProductoSalida view large-9 medium-8 columns content">
    <h3><?= h($procesoProductoSalida->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProductoSalida->has('proceso') ? $this->Html->link($procesoProductoSalida->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoSalida->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProductoSalida->has('producto') ? $this->Html->link($procesoProductoSalida->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProductoSalida->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoProductoSalida->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProductoSalida->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProductoSalida->cantidad) ?></td>
        </tr>
    </table>
</div>
