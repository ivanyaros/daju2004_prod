<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Proveedores Cliente') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Direcciones', 'action' => 'index']) ?>"><?= __('List Direcciones') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Direcciones','action' => 'add']) ?>"><?= __('New Direccione') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales', 'action' => 'index']) ?>"><?= __('List Entradas De Materiales') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales','action' => 'add']) ?>"><?= __('New Entradas De Materiale') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios', 'action' => 'index']) ?>"><?= __('List Envios') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios','action' => 'add']) ?>"><?= __('New Envio') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosEmpresas', 'action' => 'index']) ?>"><?= __('List Pedidos Empresas') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosEmpresas','action' => 'add']) ?>"><?= __('New Pedidos Empresa') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresMaterial', 'action' => 'index']) ?>"><?= __('List Proveedores Material') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'ProveedoresMaterial','action' => 'add']) ?>"><?= __('New Proveedores Material') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Proveedores Clientes') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NIF_CIF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedor_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_contacto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedoresClientes as $proveedoresCliente): ?>
            <tr>
                <td><?= $this->Number->format($proveedoresCliente->id) ?></td>
                <td><?= h($proveedoresCliente->name) ?></td>
                <td><?= h($proveedoresCliente->direccion_fiscal) ?></td>
                <td><?= h($proveedoresCliente->telefono) ?></td>
                <td><?= h($proveedoresCliente->fax) ?></td>
                <td><?= h($proveedoresCliente->correo) ?></td>
                <td><?= h($proveedoresCliente->pagina_web) ?></td>
                <td><?= h($proveedoresCliente->NIF_CIF) ?></td>
                <td><?= h($proveedoresCliente->observaciones) ?></td>
                <td><?= h($proveedoresCliente->proveedor_cliente) ?></td>
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
