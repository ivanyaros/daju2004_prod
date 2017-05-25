<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinasUsadas view large-9 medium-8 columns content">
    <h3><?= h($maquinasUsada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $maquinasUsada->has('estados_de_orden') ? $this->Html->link($maquinasUsada->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $maquinasUsada->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maquina') ?></th>
            <td><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->id, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquinasUsada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquinasUsada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operaciones') ?></th>
            <td><?= $this->Number->format($maquinasUsada->operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uso') ?></th>
            <td><?= $this->Number->format($maquinasUsada->uso) ?></td>
        </tr>
    </table>
</div>
