<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['controller' => 'SalidasObjetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['controller' => 'SalidasObjetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedoresClientes index large-9 medium-8 columns content">
    <h3><?= __('Proveedores Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NIF_CIF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_contacto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedoresClientes as $proveedoresCliente): ?>
            <tr>
                <td><?= $this->Number->format($proveedoresCliente->id) ?></td>
                <td><?= h($proveedoresCliente->nombre) ?></td>
                <td><?= h($proveedoresCliente->direccion_fiscal) ?></td>
                <td><?= h($proveedoresCliente->telefono) ?></td>
                <td><?= h($proveedoresCliente->fax) ?></td>
                <td><?= h($proveedoresCliente->correo) ?></td>
                <td><?= h($proveedoresCliente->pagina_web) ?></td>
                <td><?= h($proveedoresCliente->NIF_CIF) ?></td>
                <td><?= h($proveedoresCliente->observaciones) ?></td>
                <td><?= h($proveedoresCliente->tipo) ?></td>
                <td><?= h($proveedoresCliente->visible) ?></td>
                <td><?= h($proveedoresCliente->persona_contacto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proveedoresCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedoresCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedoresCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresCliente->id)]) ?>
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
