<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pedidosProductosDetalle view large-9 medium-8 columns content">
    <h3><?= h($pedidosProductosDetalle->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $pedidosProductosDetalle->has('pedidos_empresa') ? $this->Html->link($pedidosProductosDetalle->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosProductosDetalle->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $pedidosProductosDetalle->has('producto') ? $this->Html->link($pedidosProductosDetalle->producto->label, ['controller' => 'Producto', 'action' => 'view', $pedidosProductosDetalle->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $pedidosProductosDetalle->has('prioridade') ? $this->Html->link($pedidosProductosDetalle->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $pedidosProductosDetalle->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosProductosDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($pedidosProductosDetalle->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosProductosDetalle->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $pedidosProductosDetalle->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

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

