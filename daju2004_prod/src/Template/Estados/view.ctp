<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="estados view large-9 medium-8 columns content">
    <h3><?= h($estado->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($estado->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($estado->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'estadosDeOrdens')"><?= __("Estados De Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

<div style="display:none" id="estadosDeOrdens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Estados De Ordens') ?></h4>
        <?php if (!empty($estado->estados_de_ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha Fin') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->estados_de_ordens as $estadosDeOrdens): ?>
            <tr>
                <td><?= h($estadosDeOrdens->id) ?></td>
                <td><?= h($estadosDeOrdens->orden_id) ?></td>
                <td><?= h($estadosDeOrdens->estado_id) ?></td>
                <td><?= h($estadosDeOrdens->fecha_inicio) ?></td>
                <td><?= h($estadosDeOrdens->fecha_fin) ?></td>
                <td><?= h($estadosDeOrdens->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstadosDeOrdens', 'action' => 'view', $estadosDeOrdens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstadosDeOrdens', 'action' => 'edit', $estadosDeOrdens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstadosDeOrdens', 'action' => 'delete', $estadosDeOrdens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosDeOrdens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?></h4>
        <?php if (!empty($estado->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Coste Operario') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->id) ?></td>
                <td><?= h($ordens->name) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->centro_id) ?></td>
                <td><?= h($ordens->proceso_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
                <td><?= h($ordens->coste_operario) ?></td>
                <td><?= h($ordens->observaciones) ?></td>
                <td><?= h($ordens->prioridade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ordens', 'action' => 'view', $ordens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ordens', 'action' => 'edit', $ordens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ordens', 'action' => 'delete', $ordens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordens->id)]) ?>
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

