<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedores Material'), ['action' => 'edit', $proveedoresMaterial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedores Material'), ['action' => 'delete', $proveedoresMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresMaterial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Material'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedoresMaterial view large-9 medium-8 columns content">
    <h3><?= h($proveedoresMaterial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $proveedoresMaterial->has('proveedores_cliente') ? $this->Html->link($proveedoresMaterial->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresMaterial->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $proveedoresMaterial->has('material') ? $this->Html->link($proveedoresMaterial->material->id, ['controller' => 'Material', 'action' => 'view', $proveedoresMaterial->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proveedoresMaterial->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedoresMaterial->id) ?></td>
        </tr>
    </table>
</div>
