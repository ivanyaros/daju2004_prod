<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($user->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass') ?></th>
            <td><?= h($user->pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($user->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($user->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($user->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($user->coste_tiempo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios En Estados Orden') ?>
        	<li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add',$user->id,'user_id']) ?> </li>
        </h4>
        <?php if (!empty($user->usuarios_en_estados_orden)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Parte') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->usuarios_en_estados_orden as $usuariosEnEstadosOrden): ?>
            <tr>
                <td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
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