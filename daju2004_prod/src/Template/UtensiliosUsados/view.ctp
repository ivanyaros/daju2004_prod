<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Utensilios Usado'), ['action' => 'edit', $utensiliosUsado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utensilios Usado'), ['action' => 'delete', $utensiliosUsado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="utensiliosUsados view large-9 medium-8 columns content">
    <h3><?= h($utensiliosUsado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utensilio') ?></th>
            <td><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->id, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensiliosUsado->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensiliosUsado->id) ?></td>
        </tr>
    </table>
</div>
