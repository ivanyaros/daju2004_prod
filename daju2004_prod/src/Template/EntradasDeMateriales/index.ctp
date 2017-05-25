<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entradas De Materiale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entradasDeMateriales index large-9 medium-8 columns content">
    <h3><?= __('Entradas De Materiales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
            <tr>
                <td><?= $this->Number->format($entradasDeMateriale->id) ?></td>
                <td><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($entradasDeMateriale->referencia) ?></td>
                <td><?= h($entradasDeMateriale->observaciones) ?></td>
                <td><?= h($entradasDeMateriale->albaran) ?></td>
                <td><?= h($entradasDeMateriale->fecha_envio) ?></td>
                <td><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->id, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
                <td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entradasDeMateriale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entradasDeMateriale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entradasDeMateriale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasDeMateriale->id)]) ?>
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
