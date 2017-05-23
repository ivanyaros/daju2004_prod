<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedores Cliente'), ['action' => 'edit', $proveedoresCliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedores Cliente'), ['action' => 'delete', $proveedoresCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresCliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Direcciones'), ['controller' => 'Direcciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccione'), ['controller' => 'Direcciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['controller' => 'SalidasObjetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['controller' => 'SalidasObjetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $proveedoresCliente->tipo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proveedoresCliente->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Direcciones') ?></h4>
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
        <h4><?= __('Related Entradas Material') ?></h4>
        <?php if (!empty($proveedoresCliente->entradas_material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->entradas_material as $entradasMaterial): ?>
            <tr>
                <td><?= h($entradasMaterial->id) ?></td>
                <td><?= h($entradasMaterial->proveedores_cliente_id) ?></td>
                <td><?= h($entradasMaterial->observaciones) ?></td>
                <td><?= h($entradasMaterial->albaran) ?></td>
                <td><?= h($entradasMaterial->fecha) ?></td>
                <td><?= h($entradasMaterial->centro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntradasMaterial', 'action' => 'view', $entradasMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntradasMaterial', 'action' => 'edit', $entradasMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntradasMaterial', 'action' => 'delete', $entradasMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasMaterial->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos Empresas') ?></h4>
        <?php if (!empty($proveedoresCliente->pedidos_empresas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
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
        <h4><?= __('Related Salidas Objetos') ?></h4>
        <?php if (!empty($proveedoresCliente->salidas_objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->salidas_objetos as $salidasObjetos): ?>
            <tr>
                <td><?= h($salidasObjetos->id) ?></td>
                <td><?= h($salidasObjetos->proveedores_cliente_id) ?></td>
                <td><?= h($salidasObjetos->fecha_pedido) ?></td>
                <td><?= h($salidasObjetos->fecha_entrega) ?></td>
                <td><?= h($salidasObjetos->albaran) ?></td>
                <td><?= h($salidasObjetos->pedidos_empresa_id) ?></td>
                <td><?= h($salidasObjetos->centro_id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Material') ?></h4>
        <?php if (!empty($proveedoresCliente->material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Longitud') ?></th>
                <th scope="col"><?= __('Anchura') ?></th>
                <th scope="col"><?= __('Profundidad') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Gramaje') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col"><?= __('Unidades Embalaje') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedoresCliente->material as $material): ?>
            <tr>
                <td><?= h($material->id) ?></td>
                <td><?= h($material->nombre) ?></td>
                <td><?= h($material->referencia) ?></td>
                <td><?= h($material->familia_id) ?></td>
                <td><?= h($material->longitud) ?></td>
                <td><?= h($material->anchura) ?></td>
                <td><?= h($material->profundidad) ?></td>
                <td><?= h($material->color) ?></td>
                <td><?= h($material->gramaje) ?></td>
                <td><?= h($material->peso_ud) ?></td>
                <td><?= h($material->unidades_embalaje) ?></td>
                <td><?= h($material->precio) ?></td>
                <td><?= h($material->moneda_id) ?></td>
                <td><?= h($material->iva_id) ?></td>
                <td><?= h($material->observaciones) ?></td>
                <td><?= h($material->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Material', 'action' => 'view', $material->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Material', 'action' => 'edit', $material->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Material', 'action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
