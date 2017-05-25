<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoMaterialEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoMaterialEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoMaterialEntrada->has('proceso') ? $this->Html->link($procesoMaterialEntrada->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterialEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $procesoMaterialEntrada->has('material') ? $this->Html->link($procesoMaterialEntrada->material->id, ['controller' => 'Material', 'action' => 'view', $procesoMaterialEntrada->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Lineales') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_lineales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Cuadrados') ?></th>
            <td><?= $this->Number->format($procesoMaterialEntrada->metros_cuadrados) ?></td>
        </tr>
    </table>
</div>
