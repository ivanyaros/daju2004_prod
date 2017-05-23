<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ordens Estados Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Ordens Estados Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordens_estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordensEstadosUsuarios as $ordensEstadosUsuario): ?>
            <tr>
                <td><?= $this->Number->format($ordensEstadosUsuario->id) ?></td>
                <td><?= $ordensEstadosUsuario->has('ordens_estado') ? $this->Html->link($ordensEstadosUsuario->ordens_estado->id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosUsuario->ordens_estado->id]) : '' ?></td>
                <td><?= $ordensEstadosUsuario->has('usuario') ? $this->Html->link($ordensEstadosUsuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $ordensEstadosUsuario->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($ordensEstadosUsuario->parte) ?></td>
                <td><?= h($ordensEstadosUsuario->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordensEstadosUsuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordensEstadosUsuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordensEstadosUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUsuario->id)]) ?>
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
