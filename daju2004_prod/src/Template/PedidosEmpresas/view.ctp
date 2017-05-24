<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Empresa'), ['action' => 'edit', $pedidosEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Empresa'), ['action' => 'delete', $pedidosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['controller' => 'SalidasObjetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['controller' => 'SalidasObjetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosEmpresas view large-9 medium-8 columns content">
    <h3><?= h($pedidosEmpresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($pedidosEmpresa->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($pedidosEmpresa->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($pedidosEmpresa->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($pedidosEmpresa->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosEmpresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosEmpresa->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $pedidosEmpresa->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pedidos Productos Detalle') ?></h4>
        <?php if (!empty($pedidosEmpresa->pedidos_productos_detalle)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedidosEmpresa->pedidos_productos_detalle as $pedidosProductosDetalle): ?>
            <tr>
                <td><?= h($pedidosProductosDetalle->id) ?></td>
                <td><?= h($pedidosProductosDetalle->pedidos_empresa_id) ?></td>
                <td><?= h($pedidosProductosDetalle->producto_id) ?></td>
                <td><?= h($pedidosProductosDetalle->cantidad) ?></td>
                <td><?= h($pedidosProductosDetalle->fecha) ?></td>
                <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
                <td><?= h($pedidosProductosDetalle->prioridade_id) ?></td>
                <td><?= h($pedidosProductosDetalle->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PedidosProductosDetalle', 'action' => 'view', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PedidosProductosDetalle', 'action' => 'edit', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidosProductosDetalle', 'action' => 'delete', $pedidosProductosDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProductosDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Salidas Objetos') ?></h4>
        <?php if (!empty($pedidosEmpresa->salidas_objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedidosEmpresa->salidas_objetos as $salidasObjetos): ?>
            <tr>
                <td><?= h($salidasObjetos->id) ?></td>
                <td><?= h($salidasObjetos->proveedores_cliente_id) ?></td>
                <td><?= h($salidasObjetos->fecha_pedido) ?></td>
                <td><?= h($salidasObjetos->fecha_envio) ?></td>
                <td><?= h($salidasObjetos->albaran) ?></td>
                <td><?= h($salidasObjetos->pedidos_empresa_id) ?></td>
                <td><?= h($salidasObjetos->centro_id) ?></td>
                <td><?= h($salidasObjetos->fecha_entrega) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalidasObjetos', 'action' => 'view', $salidasObjetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalidasObjetos', 'action' => 'edit', $salidasObjetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalidasObjetos', 'action' => 'delete', $salidasObjetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasObjetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
