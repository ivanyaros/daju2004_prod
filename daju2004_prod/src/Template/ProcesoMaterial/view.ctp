<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso Material'), ['action' => 'edit', $procesoMaterial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso Material'), ['action' => 'delete', $procesoMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoMaterial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Material'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="procesoMaterial view large-9 medium-8 columns content">
    <h3><?= h($procesoMaterial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoMaterial->has('proceso') ? $this->Html->link($procesoMaterial->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterial->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $procesoMaterial->has('material') ? $this->Html->link($procesoMaterial->material->id, ['controller' => 'Material', 'action' => 'view', $procesoMaterial->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoMaterial->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoMaterial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Lineales') ?></th>
            <td><?= $this->Number->format($procesoMaterial->metros_lineales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Cuadrados') ?></th>
            <td><?= $this->Number->format($procesoMaterial->metros_cuadrados) ?></td>
        </tr>
    </table>
</div>
