<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($user->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($user->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($user->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($user->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($user->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?></h4>
        <?php if (!empty($user->usuarios_en_estados_orden)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Parte') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->usuarios_en_estados_orden as $usuariosEnEstadosOrden): ?>
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

