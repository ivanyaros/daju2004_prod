<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($objetosEntrada->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'objetosEntrada','action' => 'edit',$objetosEntrada->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Objeto') ?></td>
            <td class="w3-border"><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($objetosEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($objetosEntrada->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Entrada Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Cantidad Entrada') ?></td>
            <td class="w3-border"><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Cantidad Producida') ?></td>
            <td class="w3-border"><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
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

