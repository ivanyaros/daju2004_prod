<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['controller' => 'SalidasObjetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['controller' => 'SalidasObjetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centros index large-9 medium-8 columns content">
    <h3><?= __('Centros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centroscol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centros as $centro): ?>
            <tr>
                <td><?= $this->Number->format($centro->id) ?></td>
                <td><?= h($centro->nombre) ?></td>
                <td><?= h($centro->referencia) ?></td>
                <td><?= h($centro->direccion) ?></td>
                <td><?= h($centro->centroscol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]) ?>
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
