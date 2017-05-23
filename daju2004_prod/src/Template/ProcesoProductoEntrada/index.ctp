<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="procesoProductoEntrada index large-9 medium-8 columns content">
    <h3><?= __('Proceso Producto Entrada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
            <tr>
                <td><?= $this->Number->format($procesoProductoEntrada->id) ?></td>
                <td><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>
                <td><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($procesoProductoEntrada->cantidad) ?></td>
                <td><?= h($procesoProductoEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $procesoProductoEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $procesoProductoEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $procesoProductoEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoEntrada->id)]) ?>
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
