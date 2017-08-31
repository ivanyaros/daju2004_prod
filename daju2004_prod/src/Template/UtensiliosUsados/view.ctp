<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($utensiliosUsado->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'utensiliosUsados','action' => 'edit',$utensiliosUsado->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Tarea') ?></td>
            <td class="w3-border"><?= $utensiliosUsado->has('tarea') ? $this->Html->link($utensiliosUsado->tarea->label, ['controller' => 'Tareas', 'action' => 'view', $utensiliosUsado->tarea->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Utensilio') ?></td>
            <td class="w3-border"><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->label, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($utensiliosUsado->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($utensiliosUsado->id) ?></td>
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

