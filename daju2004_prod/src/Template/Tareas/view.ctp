<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($tarea->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'tareas','action' => 'edit',$tarea->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Subproceso') ?></td>
            <td class="w3-border"><?= $tarea->has('subproceso') ? $this->Html->link($tarea->subproceso->label, ['controller' => 'Subproceso', 'action' => 'view', $tarea->subproceso->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Orden') ?></td>
            <td class="w3-border"><?= $tarea->has('orden') ? $this->Html->link($tarea->orden->label, ['controller' => 'Ordens', 'action' => 'view', $tarea->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($tarea->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Segundos Duracion') ?></td>
            <td class="w3-border"><?= $this->Number->format($tarea->segundos_duracion) ?></td>
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

