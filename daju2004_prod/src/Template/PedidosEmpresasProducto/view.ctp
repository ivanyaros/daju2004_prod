<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Empresas Producto'), ['action' => 'edit', $pedidosEmpresasProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Empresas Producto'), ['action' => 'delete', $pedidosEmpresasProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresasProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresas Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosEmpresasProducto view large-9 medium-8 columns content">
    <h3><?= h($pedidosEmpresasProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $pedidosEmpresasProducto->has('pedidos_empresa') ? $this->Html->link($pedidosEmpresasProducto->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosEmpresasProducto->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $pedidosEmpresasProducto->has('producto') ? $this->Html->link($pedidosEmpresasProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $pedidosEmpresasProducto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($pedidosEmpresasProducto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosEmpresasProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($pedidosEmpresasProducto->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosEmpresasProducto->fecha) ?></td>
        </tr>
    </table>
</div>
