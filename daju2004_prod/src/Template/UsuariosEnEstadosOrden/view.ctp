<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuarios En Estados Orden'), ['action' => 'edit', $usuariosEnEstadosOrden->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuarios En Estados Orden'), ['action' => 'delete', $usuariosEnEstadosOrden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosEnEstadosOrden->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuariosEnEstadosOrden view large-9 medium-8 columns content">
    <h3><?= h($usuariosEnEstadosOrden->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $usuariosEnEstadosOrden->has('estados_de_orden') ? $this->Html->link($usuariosEnEstadosOrden->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $usuariosEnEstadosOrden->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $usuariosEnEstadosOrden->has('usuario') ? $this->Html->link($usuariosEnEstadosOrden->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuariosEnEstadosOrden->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuariosEnEstadosOrden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parte') ?></th>
            <td><?= $this->Number->format($usuariosEnEstadosOrden->parte) ?></td>
        </tr>
    </table>
</div>
