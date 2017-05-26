<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Objetos Entrada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetosEntrada index large-9 medium-8 columns content">
    <h3><?= __('Objetos Entrada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entrada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salida_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_entrada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetosEntrada as $objetosEntrada): ?>
            <tr>
                <td><?= $this->Number->format($objetosEntrada->id) ?></td>
                <td><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
                <td><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
                <td><?= h($objetosEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $objetosEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $objetosEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $objetosEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosEntrada->id)]) ?>
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
