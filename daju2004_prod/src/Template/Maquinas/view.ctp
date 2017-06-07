<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinas view large-9 medium-8 columns content">
    <h3><?= h($maquina->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($maquina->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquina->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($maquina->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($maquina->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?></h4>
        <?php if (!empty($maquina->maquinas_usadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Maquina Id') ?></th>
                <th scope="col"><?= __('Operaciones') ?></th>
                <th scope="col"><?= __('Uso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($maquina->maquinas_usadas as $maquinasUsadas): ?>
            <tr>
                <td><?= h($maquinasUsadas->id) ?></td>
                <td><?= h($maquinasUsadas->estados_de_orden_id) ?></td>
                <td><?= h($maquinasUsadas->maquina_id) ?></td>
                <td><?= h($maquinasUsadas->operaciones) ?></td>
                <td><?= h($maquinasUsadas->uso) ?></td>
                <td><?= h($maquinasUsadas->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MaquinasUsadas', 'action' => 'view', $maquinasUsadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MaquinasUsadas', 'action' => 'edit', $maquinasUsadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaquinasUsadas', 'action' => 'delete', $maquinasUsadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
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

