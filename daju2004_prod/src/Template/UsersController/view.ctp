<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Controller'), ['action' => 'edit', $usersController->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Controller'), ['action' => 'delete', $usersController->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersController->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Controller'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Controller'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersController view large-9 medium-8 columns content">
    <h3><?= h($usersController->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($usersController->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($usersController->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($usersController->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usersController->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usersController->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($usersController->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($usersController->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersController->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($usersController->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($usersController->coste_tiempo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios En Estados Orden') ?></h4>
        <?php if (!empty($usersController->usuarios_en_estados_orden)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Parte') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usersController->usuarios_en_estados_orden as $usuariosEnEstadosOrden): ?>
            <tr>
                <td><?= h($usuariosEnEstadosOrden->id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->user_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->parte) ?></td>
                <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'view', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'edit', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'delete', $usuariosEnEstadosOrden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosEnEstadosOrden->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
