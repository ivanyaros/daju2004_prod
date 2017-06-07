<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="objetosEntrada view large-9 medium-8 columns content">
    <h3><?= h($objetosEntrada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objetosEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objetosEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada Id') ?></th>
            <td><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Entrada') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
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

