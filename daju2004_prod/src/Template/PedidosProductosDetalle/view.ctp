<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Productos Detalle'), ['action' => 'edit', $pedidosProductosDetalle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Productos Detalle'), ['action' => 'delete', $pedidosProductosDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProductosDetalle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prioridades'), ['controller' => 'Prioridades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prioridade'), ['controller' => 'Prioridades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosProductosDetalle view large-9 medium-8 columns content">
    <h3><?= h($pedidosProductosDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $pedidosProductosDetalle->has('pedidos_empresa') ? $this->Html->link($pedidosProductosDetalle->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosProductosDetalle->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $pedidosProductosDetalle->has('producto') ? $this->Html->link($pedidosProductosDetalle->producto->id, ['controller' => 'Producto', 'action' => 'view', $pedidosProductosDetalle->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $pedidosProductosDetalle->has('prioridade') ? $this->Html->link($pedidosProductosDetalle->prioridade->id, ['controller' => 'Prioridades', 'action' => 'view', $pedidosProductosDetalle->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosProductosDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($pedidosProductosDetalle->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosProductosDetalle->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $pedidosProductosDetalle->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
