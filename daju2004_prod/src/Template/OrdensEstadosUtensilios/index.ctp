<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ordens Estados Utensilio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosUtensilios index large-9 medium-8 columns content">
    <h3><?= __('Ordens Estados Utensilios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordens_estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utensilio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordensEstadosUtensilios as $ordensEstadosUtensilio): ?>
            <tr>
                <td><?= $this->Number->format($ordensEstadosUtensilio->id) ?></td>
                <td><?= $ordensEstadosUtensilio->has('ordens_estado') ? $this->Html->link($ordensEstadosUtensilio->ordens_estado->id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosUtensilio->ordens_estado->id]) : '' ?></td>
                <td><?= $ordensEstadosUtensilio->has('utensilio') ? $this->Html->link($ordensEstadosUtensilio->utensilio->id, ['controller' => 'Utensilios', 'action' => 'view', $ordensEstadosUtensilio->utensilio->id]) : '' ?></td>
                <td><?= h($ordensEstadosUtensilio->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordensEstadosUtensilio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordensEstadosUtensilio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordensEstadosUtensilio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUtensilio->id)]) ?>
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
