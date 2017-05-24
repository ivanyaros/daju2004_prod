<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($usuario->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($usuario->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($usuario->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass') ?></th>
            <td><?= h($usuario->pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($usuario->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($usuario->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($usuario->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($usuario->coste_tiempo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordens Estados') ?></h4>
        <?php if (!empty($usuario->ordens_estados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha Fin') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->ordens_estados as $ordensEstados): ?>
            <tr>
                <td><?= h($ordensEstados->id) ?></td>
                <td><?= h($ordensEstados->orden_id) ?></td>
                <td><?= h($ordensEstados->estado_id) ?></td>
                <td><?= h($ordensEstados->fecha_inicio) ?></td>
                <td><?= h($ordensEstados->fecha_fin) ?></td>
                <td><?= h($ordensEstados->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdensEstados', 'action' => 'edit', $ordensEstados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdensEstados', 'action' => 'delete', $ordensEstados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
