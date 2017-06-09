<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($pedidosProductosDetalle->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'pedidosProductosDetalle','action' => 'edit',$pedidosProductosDetalle->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Pedidos Empresa') ?></td>
            <td class="w3-border"><?= $pedidosProductosDetalle->has('pedidos_empresa') ? $this->Html->link($pedidosProductosDetalle->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosProductosDetalle->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Producto') ?></td>
            <td class="w3-border"><?= $pedidosProductosDetalle->has('producto') ? $this->Html->link($pedidosProductosDetalle->producto->label, ['controller' => 'Producto', 'action' => 'view', $pedidosProductosDetalle->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($pedidosProductosDetalle->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Prioridade') ?></td>
            <td class="w3-border"><?= $pedidosProductosDetalle->has('prioridade') ? $this->Html->link($pedidosProductosDetalle->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $pedidosProductosDetalle->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($pedidosProductosDetalle->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Cantidad') ?></td>
            <td class="w3-border"><?= $this->Number->format($pedidosProductosDetalle->cantidad) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha') ?></td>
            <td class="w3-border"><?= h($pedidosProductosDetalle->fecha) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Terminado') ?></td>
            <td class="w3-border"><?= $pedidosProductosDetalle->terminado ? __('Yes') : __('No'); ?></td>
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

