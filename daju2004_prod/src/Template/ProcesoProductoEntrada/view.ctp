<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoProductoEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoProductoEntrada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->label, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoProductoEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->cantidad) ?></td>
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

