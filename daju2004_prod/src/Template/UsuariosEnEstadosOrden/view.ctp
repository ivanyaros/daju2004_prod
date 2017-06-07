<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="usuariosEnEstadosOrden view large-9 medium-8 columns content">
    <h3><?= h($usuariosEnEstadosOrden->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $usuariosEnEstadosOrden->has('estados_de_orden') ? $this->Html->link($usuariosEnEstadosOrden->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $usuariosEnEstadosOrden->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usuariosEnEstadosOrden->has('user') ? $this->Html->link($usuariosEnEstadosOrden->user->label, ['controller' => 'Users', 'action' => 'view', $usuariosEnEstadosOrden->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuariosEnEstadosOrden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parte') ?></th>
            <td><?= $this->Number->format($usuariosEnEstadosOrden->parte) ?></td>
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

