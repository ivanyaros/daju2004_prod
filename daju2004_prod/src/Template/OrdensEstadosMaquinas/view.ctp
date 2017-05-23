<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordens Estados Maquina'), ['action' => 'edit', $ordensEstadosMaquina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordens Estados Maquina'), ['action' => 'delete', $ordensEstadosMaquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosMaquina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados Maquinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estados Maquina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordensEstadosMaquinas view large-9 medium-8 columns content">
    <h3><?= h($ordensEstadosMaquina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ordens Estado') ?></th>
            <td><?= $ordensEstadosMaquina->has('ordens_estado') ? $this->Html->link($ordensEstadosMaquina->ordens_estado->id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosMaquina->ordens_estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maquina') ?></th>
            <td><?= $ordensEstadosMaquina->has('maquina') ? $this->Html->link($ordensEstadosMaquina->maquina->id, ['controller' => 'Maquinas', 'action' => 'view', $ordensEstadosMaquina->maquina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($ordensEstadosMaquina->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordensEstadosMaquina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operaciones') ?></th>
            <td><?= $this->Number->format($ordensEstadosMaquina->operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uso') ?></th>
            <td><?= $this->Number->format($ordensEstadosMaquina->uso) ?></td>
        </tr>
    </table>
</div>
