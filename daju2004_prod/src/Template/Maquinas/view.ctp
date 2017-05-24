<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maquina'), ['action' => 'edit', $maquina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maquina'), ['action' => 'delete', $maquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maquinas view large-9 medium-8 columns content">
    <h3><?= h($maquina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($maquina->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquina->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($maquina->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($maquina->coste_tiempo) ?></td>
        </tr>
    </table>
</div>
