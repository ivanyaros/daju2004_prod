<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Envio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="envios index large-9 medium-8 columns content">
    <h3><?= __('Envios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccione_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($envios as $envio): ?>
            <tr>
                <td><?= $this->Number->format($envio->id) ?></td>
                <td><?= $envio->has('proveedores_cliente') ? $this->Html->link($envio->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $envio->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($envio->fecha_pedido) ?></td>
                <td><?= h($envio->fecha_envio) ?></td>
                <td><?= h($envio->albaran) ?></td>
                <td><?= $envio->has('pedidos_empresa') ? $this->Html->link($envio->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $envio->pedidos_empresa->id]) : '' ?></td>
                <td><?= $envio->has('centro') ? $this->Html->link($envio->centro->id, ['controller' => 'Centros', 'action' => 'view', $envio->centro->id]) : '' ?></td>
                <td><?= h($envio->fecha_entrega) ?></td>
                <td><?= h($envio->observaciones) ?></td>
                <td><?= $envio->has('direccione') ? $this->Html->link($envio->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $envio->direccione->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $envio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $envio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $envio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envio->id)]) ?>
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
