<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoMaterialEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoMaterialEntrada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoMaterialEntrada->has('proceso') ? $this->Html->link($procesoMaterialEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterialEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $procesoMaterialEntrada->has('material') ? $this->Html->link($procesoMaterialEntrada->material->label, ['controller' => 'Material', 'action' => 'view', $procesoMaterialEntrada->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Lineales') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_lineales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Cuadrados') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_cuadrados) ?></td>
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

