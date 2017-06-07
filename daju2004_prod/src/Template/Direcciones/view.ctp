<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="direcciones view large-9 medium-8 columns content">
    <h3><?= h($direccione->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $direccione->has('proveedores_cliente') ? $this->Html->link($direccione->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $direccione->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($direccione->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($direccione->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($direccione->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($direccione->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina Web') ?></th>
            <td><?= h($direccione->pagina_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($direccione->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccione->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?></h4>
        <?php if (!empty($direccione->envios)): ?>
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
            <?php foreach ($direccione->envios as $envios): ?>
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

