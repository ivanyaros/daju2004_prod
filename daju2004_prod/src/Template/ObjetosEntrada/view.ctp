<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objetos Entrada'), ['action' => 'edit', $objetosEntrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objetos Entrada'), ['action' => 'delete', $objetosEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosEntrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objetos Entrada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objetos Entrada'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objetosEntrada view large-9 medium-8 columns content">
    <h3><?= h($objetosEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objetosEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objetosEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada') ?></th>
            <td><?= $this->Number->format($objetosEntrada->entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salida') ?></th>
            <td><?= $this->Number->format($objetosEntrada->salida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Gastada') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_gastada) ?></td>
        </tr>
    </table>
</div>
