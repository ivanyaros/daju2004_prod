<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="materialesEntrada view large-9 medium-8 columns content">
    <h3><?= h($materialesEntrada->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materiale') ?></th>
            <td><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->label, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($materialesEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materialesEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($materialesEntrada->cantidad_producida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Gastados') ?></th>
            <td><?= $this->Number->format($materialesEntrada->metros_gastados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($materialesEntrada->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($materialesEntrada->scrap) ?></td>
        </tr>
    </table>
</div>
