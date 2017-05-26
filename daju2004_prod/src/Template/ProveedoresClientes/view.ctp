<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proveedoresClientes view large-9 medium-8 columns content">
    <h3><?= h($proveedoresCliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($proveedoresCliente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Fiscal') ?></th>
            <td><?= h($proveedoresCliente->direccion_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($proveedoresCliente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($proveedoresCliente->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($proveedoresCliente->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina Web') ?></th>
            <td><?= h($proveedoresCliente->pagina_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NIF CIF') ?></th>
            <td><?= h($proveedoresCliente->NIF_CIF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proveedoresCliente->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona Contacto') ?></th>
            <td><?= h($proveedoresCliente->persona_contacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedoresCliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor Cliente') ?></th>
            <td><?= $proveedoresCliente->proveedor_cliente ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proveedoresCliente->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Direcciones') ?>
        	<li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add',$proveedoresCliente->id]) ?> </li>
        </h4>
        <?php if (!empty($proveedoresCliente->direcciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Pagina Web') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->direcciones as $direcciones): ?>
            <tr>
                <td><?= h($direcciones->id) ?></td>
                <td><?= h($direcciones->proveedores_cliente_id) ?></td>
                <td><?= h($direcciones->direccion) ?></td>
                <td><?= h($direcciones->telefono) ?></td>
                <td><?= h($direcciones->fax) ?></td>
                <td><?= h($direcciones->correo) ?></td>
                <td><?= h($direcciones->pagina_web) ?></td>
                <td><?= h($direcciones->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Direcciones', 'action' => 'view', $direcciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Direcciones', 'action' => 'edit', $direcciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Direcciones', 'action' => 'delete', $direcciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direcciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entradas De Materiales') ?>
        	<li><?= $this->Html->link(__('New Entradas De Materiale'), ['controller' => 'EntradasDeMateriales', 'action' => 'add',$proveedoresCliente->id]) ?> </li>
        </h4>
        <?php if (!empty($proveedoresCliente->entradas_de_materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Fecha Recepcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->entradas_de_materiales as $entradasDeMateriales): ?>
            <tr>
                <td><?= h($entradasDeMateriales->id) ?></td>
                <td><?= h($entradasDeMateriales->proveedores_cliente_id) ?></td>
                <td><?= h($entradasDeMateriales->referencia) ?></td>
                <td><?= h($entradasDeMateriales->observaciones) ?></td>
                <td><?= h($entradasDeMateriales->albaran) ?></td>
                <td><?= h($entradasDeMateriales->fecha_envio) ?></td>
                <td><?= h($entradasDeMateriales->centro_id) ?></td>
                <td><?= h($entradasDeMateriales->fecha_recepcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntradasDeMateriales', 'action' => 'view', $entradasDeMateriales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntradasDeMateriales', 'action' => 'edit', $entradasDeMateriales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntradasDeMateriales', 'action' => 'delete', $entradasDeMateriales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasDeMateriales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Envios') ?>
        	<li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add',$proveedoresCliente->id]) ?> </li>
        </h4>
        <?php if (!empty($proveedoresCliente->envios)): ?>
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
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Direccione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->envios as $envios): ?>
            <tr>
                <td><?= h($envios->id) ?></td>
                <td><?= h($envios->proveedores_cliente_id) ?></td>
                <td><?= h($envios->fecha_pedido) ?></td>
                <td><?= h($envios->fecha_envio) ?></td>
                <td><?= h($envios->albaran) ?></td>
                <td><?= h($envios->pedidos_empresa_id) ?></td>
                <td><?= h($envios->centro_id) ?></td>
                <td><?= h($envios->fecha_entrega) ?></td>
                <td><?= h($envios->observaciones) ?></td>
                <td><?= h($envios->direccione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Envios', 'action' => 'view', $envios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Envios', 'action' => 'edit', $envios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Envios', 'action' => 'delete', $envios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos Empresas') ?>
        	<li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add',$proveedoresCliente->id]) ?> </li>
        </h4>
        <?php if (!empty($proveedoresCliente->pedidos_empresas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->pedidos_empresas as $pedidosEmpresas): ?>
            <tr>
                <td><?= h($pedidosEmpresas->id) ?></td>
                <td><?= h($pedidosEmpresas->nombre) ?></td>
                <td><?= h($pedidosEmpresas->referencia) ?></td>
                <td><?= h($pedidosEmpresas->proveedores_cliente_id) ?></td>
                <td><?= h($pedidosEmpresas->fecha) ?></td>
                <td><?= h($pedidosEmpresas->albaran) ?></td>
                <td><?= h($pedidosEmpresas->observaciones) ?></td>
                <td><?= h($pedidosEmpresas->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosEmpresas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PedidosEmpresas', 'action' => 'edit', $pedidosEmpresas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidosEmpresas', 'action' => 'delete', $pedidosEmpresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proveedores Material') ?>
        	<li><?= $this->Html->link(__('New Proveedores Material'), ['controller' => 'ProveedoresMaterial', 'action' => 'add',$proveedoresCliente->id]) ?> </li>
        </h4>
        <?php if (!empty($proveedoresCliente->proveedores_material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->proveedores_material as $proveedoresMaterial): ?>
            <tr>
                <td><?= h($proveedoresMaterial->id) ?></td>
                <td><?= h($proveedoresMaterial->proveedores_cliente_id) ?></td>
                <td><?= h($proveedoresMaterial->material_id) ?></td>
                <td><?= h($proveedoresMaterial->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProveedoresMaterial', 'action' => 'view', $proveedoresMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProveedoresMaterial', 'action' => 'edit', $proveedoresMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProveedoresMaterial', 'action' => 'delete', $proveedoresMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresMaterial->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
