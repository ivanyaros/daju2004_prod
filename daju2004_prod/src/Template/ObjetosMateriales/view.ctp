<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objetos Materiale'), ['action' => 'edit', $objetosMateriale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objetos Materiale'), ['action' => 'delete', $objetosMateriale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosMateriale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objetos Materiales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objetos Materiale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objetosMateriales view large-9 medium-8 columns content">
    <h3><?= h($objetosMateriale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $objetosMateriale->has('objeto') ? $this->Html->link($objetosMateriale->objeto->id, ['controller' => 'Objetos', 'action' => 'view', $objetosMateriale->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materiale') ?></th>
            <td><?= $objetosMateriale->has('materiale') ? $this->Html->link($objetosMateriale->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $objetosMateriale->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objetosMateriale->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objetosMateriale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($objetosMateriale->cantidad_producida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uso') ?></th>
            <td><?= $this->Number->format($objetosMateriale->uso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($objetosMateriale->scrap) ?></td>
        </tr>
    </table>
</div>
