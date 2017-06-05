<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Pedidos Empresa') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresClientes', 'action' => 'index']) ?>"><?= __('List Proveedores Clientes') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresClientes','action' => 'add']) ?>"><?= __('New Proveedores Cliente') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios', 'action' => 'index']) ?>"><?= __('List Envios') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios','action' => 'add']) ?>"><?= __('New Envio') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?>"><?= __('List Pedidos Productos Detalle') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosProductosDetalle','action' => 'add']) ?>"><?= __('New Pedidos Productos Detalle') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Pedidos Empresas') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosEmpresas as $pedidosEmpresa): ?>
            <tr>
                <td><?= $this->Number->format($pedidosEmpresa->id) ?></td>
                <td><?= h($pedidosEmpresa->name) ?></td>
                <td><?= h($pedidosEmpresa->referencia) ?></td>
                <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($pedidosEmpresa->fecha) ?></td>
                <td><?= h($pedidosEmpresa->albaran) ?></td>
                <td><?= h($pedidosEmpresa->observaciones) ?></td>
                <td><?= h($pedidosEmpresa->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidosEmpresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidosEmpresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresa->id)]) ?>
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
