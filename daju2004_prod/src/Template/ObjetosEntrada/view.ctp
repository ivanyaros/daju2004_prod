<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="objetosEntrada view large-9 medium-8 columns content">
    <h3><?= h($objetosEntrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->id, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objetosEntrada->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objetosEntrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada Id') ?></th>
            <td><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Entrada') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
        </tr>
    </table>
</div>
