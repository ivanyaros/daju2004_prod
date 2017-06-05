<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Entradas De Materiale') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresClientes', 'action' => 'index']) ?>"><?= __('List Proveedores Clientes') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresClientes','action' => 'add']) ?>"><?= __('New Proveedores Cliente') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Centros', 'action' => 'index']) ?>"><?= __('List Centros') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Centros','action' => 'add']) ?>"><?= __('New Centro') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Materiales', 'action' => 'index']) ?>"><?= __('List Materiales') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Materiales','action' => 'add']) ?>"><?= __('New Materiale') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Entradas De Materiales') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
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
                <td><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($entradasDeMateriale->referencia) ?></td>
                <td><?= h($entradasDeMateriale->observaciones) ?></td>
                <td><?= h($entradasDeMateriale->albaran) ?></td>
                <td><?= h($entradasDeMateriale->fecha_envio) ?></td>
                <td><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
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
    </div>
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
