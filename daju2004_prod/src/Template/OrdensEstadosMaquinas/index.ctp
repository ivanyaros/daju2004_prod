<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ordens Estados Maquina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosMaquinas index large-9 medium-8 columns content">
    <h3><?= __('Ordens Estados Maquinas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordens_estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maquina_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordensEstadosMaquinas as $ordensEstadosMaquina): ?>
            <tr>
                <td><?= $this->Number->format($ordensEstadosMaquina->id) ?></td>
                <td><?= $ordensEstadosMaquina->has('ordens_estado') ? $this->Html->link($ordensEstadosMaquina->ordens_estado->id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosMaquina->ordens_estado->id]) : '' ?></td>
                <td><?= $ordensEstadosMaquina->has('maquina') ? $this->Html->link($ordensEstadosMaquina->maquina->id, ['controller' => 'Maquinas', 'action' => 'view', $ordensEstadosMaquina->maquina->id]) : '' ?></td>
                <td><?= $this->Number->format($ordensEstadosMaquina->operaciones) ?></td>
                <td><?= $this->Number->format($ordensEstadosMaquina->uso) ?></td>
                <td><?= h($ordensEstadosMaquina->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordensEstadosMaquina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordensEstadosMaquina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordensEstadosMaquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosMaquina->id)]) ?>
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
