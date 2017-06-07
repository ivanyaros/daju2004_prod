<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pedidosEmpresas view large-9 medium-8 columns content">
    <h3><?= h($pedidosEmpresa->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pedidosEmpresa->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($pedidosEmpresa->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
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
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?></h4>
        <?php if (!empty($pedidosEmpresa->envios)): ?>
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
            <?php foreach ($pedidosEmpresa->envios as $envios): ?>
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
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
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
</div>
<script>
function openRelated(evt, relatedName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("related");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(relatedName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

