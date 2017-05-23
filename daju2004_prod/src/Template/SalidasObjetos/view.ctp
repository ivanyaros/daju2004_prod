<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salidas Objeto'), ['action' => 'edit', $salidasObjeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salidas Objeto'), ['action' => 'delete', $salidasObjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasObjeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidasObjetos view large-9 medium-8 columns content">
    <h3><?= h($salidasObjeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $salidasObjeto->has('proveedores_cliente') ? $this->Html->link($salidasObjeto->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $salidasObjeto->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($salidasObjeto->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $salidasObjeto->has('pedidos_empresa') ? $this->Html->link($salidasObjeto->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $salidasObjeto->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $salidasObjeto->has('centro') ? $this->Html->link($salidasObjeto->centro->id, ['controller' => 'Centros', 'action' => 'view', $salidasObjeto->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salidasObjeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Pedido') ?></th>
            <td><?= h($salidasObjeto->fecha_pedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entrega') ?></th>
            <td><?= h($salidasObjeto->fecha_entrega) ?></td>
        </tr>
    </table>
</div>
