<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="envios view large-9 medium-8 columns content">
    <h3><?= h($envio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $envio->has('proveedores_cliente') ? $this->Html->link($envio->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $envio->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($envio->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $envio->has('pedidos_empresa') ? $this->Html->link($envio->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $envio->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $envio->has('centro') ? $this->Html->link($envio->centro->name, ['controller' => 'Centros', 'action' => 'view', $envio->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($envio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccione') ?></th>
            <td><?= $envio->has('direccione') ? $this->Html->link($envio->direccione->id, ['controller' => 'Direcciones', 'action' => 'view', $envio->direccione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($envio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Pedido') ?></th>
            <td><?= h($envio->fecha_pedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Envio') ?></th>
            <td><?= h($envio->fecha_envio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entrega') ?></th>
            <td><?= h($envio->fecha_entrega) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Objetos') ?>
        	<li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add',$envio->id,'envio_id']) ?> </li>
        </h4>
        <?php if (!empty($envio->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Numero Serie') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($envio->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->name) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->numero_serie) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
                <td><?= h($objetos->peso) ?></td>
                <td><?= h($objetos->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objetos', 'action' => 'view', $objetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objetos', 'action' => 'edit', $objetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objetos', 'action' => 'delete', $objetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
