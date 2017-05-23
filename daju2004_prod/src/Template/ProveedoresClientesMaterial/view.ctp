<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedores Clientes Material'), ['action' => 'edit', $proveedoresClientesMaterial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedores Clientes Material'), ['action' => 'delete', $proveedoresClientesMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresClientesMaterial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes Material'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Clientes Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedoresClientesMaterial view large-9 medium-8 columns content">
    <h3><?= h($proveedoresClientesMaterial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $proveedoresClientesMaterial->has('proveedores_cliente') ? $this->Html->link($proveedoresClientesMaterial->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresClientesMaterial->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $proveedoresClientesMaterial->has('material') ? $this->Html->link($proveedoresClientesMaterial->material->id, ['controller' => 'Material', 'action' => 'view', $proveedoresClientesMaterial->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proveedoresClientesMaterial->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedoresClientesMaterial->id) ?></td>
        </tr>
    </table>
</div>
