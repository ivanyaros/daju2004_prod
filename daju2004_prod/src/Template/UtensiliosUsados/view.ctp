<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="utensiliosUsados view large-9 medium-8 columns content">
    <h3><?= h($utensiliosUsado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estados De Orden') ?></th>
            <td><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->id, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utensilio') ?></th>
            <td><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->id, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensiliosUsado->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensiliosUsado->id) ?></td>
        </tr>
    </table>
</div>
