<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Controller'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersController index large-9 medium-8 columns content">
    <h3><?= __('Users Controller') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_tiempo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersController as $usersController): ?>
            <tr>
                <td><?= $this->Number->format($usersController->id) ?></td>
                <td><?= h($usersController->name) ?></td>
                <td><?= h($usersController->apellidos) ?></td>
                <td><?= h($usersController->username) ?></td>
                <td><?= h($usersController->password) ?></td>
                <td><?= h($usersController->email) ?></td>
                <td><?= h($usersController->direccion) ?></td>
                <td><?= h($usersController->tipo) ?></td>
                <td><?= $this->Number->format($usersController->coste_operacion) ?></td>
                <td><?= $this->Number->format($usersController->coste_tiempo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersController->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersController->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersController->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersController->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
