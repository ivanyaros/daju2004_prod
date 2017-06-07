<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinasUsadas view large-9 medium-8 columns content">
    <h3><?= h($maquinasUsada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $maquinasUsada->has('estados_de_orden') ? $this->Html->link($maquinasUsada->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $maquinasUsada->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maquina') ?></th>
            <td><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->label, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquinasUsada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquinasUsada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operaciones') ?></th>
            <td><?= $this->Number->format($maquinasUsada->operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uso') ?></th>
            <td><?= $this->Number->format($maquinasUsada->uso) ?></td>
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

