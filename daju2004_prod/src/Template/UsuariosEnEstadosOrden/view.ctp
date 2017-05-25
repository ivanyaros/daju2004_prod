<?php
/**
  * @var \App\View\AppView $this
  */
?>

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
