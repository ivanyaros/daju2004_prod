<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoProductoSalida view large-9 medium-8 columns content">
    <h3><?= h($procesoProductoSalida->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProductoSalida->has('proceso') ? $this->Html->link($procesoProductoSalida->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoSalida->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProductoSalida->has('producto') ? $this->Html->link($procesoProductoSalida->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProductoSalida->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoProductoSalida->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProductoSalida->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProductoSalida->cantidad) ?></td>
        </tr>
    </table>
</div>
