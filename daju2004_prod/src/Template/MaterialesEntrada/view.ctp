<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($materialesEntrada->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'materialesEntrada','action' => 'edit',$materialesEntrada->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Objeto') ?></td>
            <td class="w3-border"><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Materiale') ?></td>
            <td class="w3-border"><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->label, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($materialesEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($materialesEntrada->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Cantidad Producida') ?></td>
            <td class="w3-border"><?= $this->Number->format($materialesEntrada->cantidad_producida) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Gastados') ?></td>
            <td class="w3-border"><?= $this->Number->format($materialesEntrada->metros_gastados) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Metros Utiles') ?></td>
            <td class="w3-border"><?= $this->Number->format($materialesEntrada->metros_utiles) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Scrap') ?></td>
            <td class="w3-border"><?= $this->Number->format($materialesEntrada->scrap) ?></td>
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

