<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utensiliosUsados index large-9 medium-8 columns content">
    <h3><?= __('Utensilios Usados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utensilio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
            <tr>
                <td><?= $this->Number->format($utensiliosUsado->id) ?></td>
                <td><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>
                <td><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->id, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
                <td><?= h($utensiliosUsado->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $utensiliosUsado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utensiliosUsado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utensiliosUsado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsado->id)]) ?>
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
