<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entradasMaterial index large-9 medium-8 columns content">
    <h3><?= __('Entradas Material') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entradasMaterial as $entradasMaterial): ?>
            <tr>
                <td><?= $this->Number->format($entradasMaterial->id) ?></td>
                <td><?= $entradasMaterial->has('proveedores_cliente') ? $this->Html->link($entradasMaterial->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasMaterial->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($entradasMaterial->observaciones) ?></td>
                <td><?= h($entradasMaterial->albaran) ?></td>
                <td><?= h($entradasMaterial->fecha) ?></td>
                <td><?= $entradasMaterial->has('centro') ? $this->Html->link($entradasMaterial->centro->id, ['controller' => 'Centros', 'action' => 'view', $entradasMaterial->centro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entradasMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entradasMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entradasMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasMaterial->id)]) ?>
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
