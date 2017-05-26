<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="entradasDeMateriales view large-9 medium-8 columns content">
    <h3><?= h($entradasDeMateriale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($entradasDeMateriale->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($entradasDeMateriale->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($entradasDeMateriale->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->name, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entradasDeMateriale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Envio') ?></th>
            <td><?= h($entradasDeMateriale->fecha_envio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Recepcion') ?></th>
            <td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
        </tr>
    </table>
</div>
