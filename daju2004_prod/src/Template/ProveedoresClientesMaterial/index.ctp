<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proveedores Clientes Material'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedoresClientesMaterial index large-9 medium-8 columns content">
    <h3><?= __('Proveedores Clientes Material') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedoresClientesMaterial as $proveedoresClientesMaterial): ?>
            <tr>
                <td><?= $this->Number->format($proveedoresClientesMaterial->id) ?></td>
                <td><?= $proveedoresClientesMaterial->has('proveedores_cliente') ? $this->Html->link($proveedoresClientesMaterial->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresClientesMaterial->proveedores_cliente->id]) : '' ?></td>
                <td><?= $proveedoresClientesMaterial->has('material') ? $this->Html->link($proveedoresClientesMaterial->material->id, ['controller' => 'Material', 'action' => 'view', $proveedoresClientesMaterial->material->id]) : '' ?></td>
                <td><?= h($proveedoresClientesMaterial->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proveedoresClientesMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedoresClientesMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedoresClientesMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresClientesMaterial->id)]) ?>
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
