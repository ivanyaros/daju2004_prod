<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maquinas Usada'), ['action' => 'edit', $maquinasUsada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maquinas Usada'), ['action' => 'delete', $maquinasUsada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maquinasUsadas view large-9 medium-8 columns content">
    <h3><?= h($maquinasUsada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $maquinasUsada->has('estados_de_orden') ? $this->Html->link($maquinasUsada->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $maquinasUsada->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maquina') ?></th>
            <td><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->id, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquinasUsada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquinasUsada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operaciones') ?></th>
            <td><?= $this->Number->format($maquinasUsada->operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uso') ?></th>
            <td><?= $this->Number->format($maquinasUsada->uso) ?></td>
        </tr>
    </table>
</div>
