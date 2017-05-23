<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso Producto Entrada'), ['action' => 'edit', $procesoProductoEntrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso Producto Entrada'), ['action' => 'delete', $procesoProductoEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoEntrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="procesoProductoEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoProductoEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoProductoEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->cantidad) ?></td>
        </tr>
    </table>
</div>
