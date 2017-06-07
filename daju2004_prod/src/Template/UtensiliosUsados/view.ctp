<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="utensiliosUsados view large-9 medium-8 columns content">
    <h3><?= h($utensiliosUsado->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utensilio') ?></th>
            <td><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->label, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensiliosUsado->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensiliosUsado->id) ?></td>
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

