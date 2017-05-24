<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiales Entrada'), ['action' => 'edit', $materialesEntrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiales Entrada'), ['action' => 'delete', $materialesEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesEntrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales Entrada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiales Entrada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materialesEntrada view large-9 medium-8 columns content">
    <h3><?= h($materialesEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->id, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materiale') ?></th>
            <td><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($materialesEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materialesEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($materialesEntrada->cantidad_producida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Gastados') ?></th>
            <td><?= $this->Number->format($materialesEntrada->metros_gastados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($materialesEntrada->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($materialesEntrada->scrap) ?></td>
        </tr>
    </table>
</div>
