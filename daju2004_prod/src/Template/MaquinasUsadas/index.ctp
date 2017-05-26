<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maquinasUsadas index large-9 medium-8 columns content">
    <h3><?= __('Maquinas Usadas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maquina_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maquinasUsadas as $maquinasUsada): ?>
            <tr>
                <td><?= $this->Number->format($maquinasUsada->id) ?></td>
                <td><?= $maquinasUsada->has('estados_de_orden') ? $this->Html->link($maquinasUsada->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $maquinasUsada->estados_de_orden->id]) : '' ?></td>
                <td><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->label, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
                <td><?= $this->Number->format($maquinasUsada->operaciones) ?></td>
                <td><?= $this->Number->format($maquinasUsada->uso) ?></td>
                <td><?= h($maquinasUsada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maquinasUsada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maquinasUsada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maquinasUsada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsada->id)]) ?>
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
