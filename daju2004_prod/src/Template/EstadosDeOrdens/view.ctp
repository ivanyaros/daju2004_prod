<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="estadosDeOrdens view large-9 medium-8 columns content">
    <h3><?= h($estadosDeOrden->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->label, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->label, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($estadosDeOrden->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estadosDeOrden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($estadosDeOrden->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($estadosDeOrden->fecha_fin) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?></h4>
        <?php if (!empty($estadosDeOrden->maquinas_usadas)): ?>
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
            <?php foreach ($estadosDeOrden->maquinas_usadas as $maquinasUsadas): ?>
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
<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?></h4>
        <?php if (!empty($estadosDeOrden->usuarios_en_estados_orden)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Parte') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estadosDeOrden->usuarios_en_estados_orden as $usuariosEnEstadosOrden): ?>
            <tr>
                <td><?= h($usuariosEnEstadosOrden->id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->user_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->parte) ?></td>
                <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'view', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'edit', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'delete', $usuariosEnEstadosOrden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosEnEstadosOrden->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?></h4>
        <?php if (!empty($estadosDeOrden->utensilios_usados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Utensilio Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estadosDeOrden->utensilios_usados as $utensiliosUsados): ?>
            <tr>
                <td><?= h($utensiliosUsados->id) ?></td>
                <td><?= h($utensiliosUsados->estados_de_orden_id) ?></td>
                <td><?= h($utensiliosUsados->utensilio_id) ?></td>
                <td><?= h($utensiliosUsados->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UtensiliosUsados', 'action' => 'view', $utensiliosUsados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UtensiliosUsados', 'action' => 'edit', $utensiliosUsados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UtensiliosUsados', 'action' => 'delete', $utensiliosUsados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsados->id)]) ?>
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

