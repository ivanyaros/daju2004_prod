<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proveedoresMaterial view large-9 medium-8 columns content">
    <h3><?= h($proveedoresMaterial->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $proveedoresMaterial->has('proveedores_cliente') ? $this->Html->link($proveedoresMaterial->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresMaterial->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $proveedoresMaterial->has('material') ? $this->Html->link($proveedoresMaterial->material->label, ['controller' => 'Material', 'action' => 'view', $proveedoresMaterial->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proveedoresMaterial->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedoresMaterial->id) ?></td>
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

