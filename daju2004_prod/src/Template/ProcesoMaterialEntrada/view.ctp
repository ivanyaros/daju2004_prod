<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso Material Entrada'), ['action' => 'edit', $procesoMaterialEntrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso Material Entrada'), ['action' => 'delete', $procesoMaterialEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoMaterialEntrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="procesoMaterialEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoMaterialEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoMaterialEntrada->has('proceso') ? $this->Html->link($procesoMaterialEntrada->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterialEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $procesoMaterialEntrada->has('material') ? $this->Html->link($procesoMaterialEntrada->material->id, ['controller' => 'Material', 'action' => 'view', $procesoMaterialEntrada->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Lineales') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_lineales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Cuadrados') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_cuadrados) ?></td>
        </tr>
    </table>
</div>
