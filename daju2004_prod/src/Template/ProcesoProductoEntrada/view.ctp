<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoProductoEntrada view large-9 medium-8 columns content">
    <h3><?= h($procesoProductoEntrada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->label, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($procesoProductoEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($procesoProductoEntrada->cantidad) ?></td>
        </tr>
    </table>
</div>
