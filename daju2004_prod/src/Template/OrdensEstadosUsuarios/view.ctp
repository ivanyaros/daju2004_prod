<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordens Estados Usuario'), ['action' => 'edit', $ordensEstadosUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordens Estados Usuario'), ['action' => 'delete', $ordensEstadosUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estados Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordensEstadosUsuarios view large-9 medium-8 columns content">
    <h3><?= h($ordensEstadosUsuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ordens Estado') ?></th>
            <td><?= $ordensEstadosUsuario->has('ordens_estado') ? $this->Html->link($ordensEstadosUsuario->ordens_estado->id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosUsuario->ordens_estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $ordensEstadosUsuario->has('usuario') ? $this->Html->link($ordensEstadosUsuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $ordensEstadosUsuario->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($ordensEstadosUsuario->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordensEstadosUsuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parte') ?></th>
            <td><?= $this->Number->format($ordensEstadosUsuario->parte) ?></td>
        </tr>
    </table>
</div>
