<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lote'), ['action' => 'edit', $lote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lote'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lotes view large-9 medium-8 columns content">
    <h3><?= h($lote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($lote->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($lote->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Iniciales') ?></th>
            <td><?= $this->Number->format($lote->metros_iniciales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Actuales') ?></th>
            <td><?= $this->Number->format($lote->metros_actuales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($lote->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidades') ?></th>
            <td><?= $this->Number->format($lote->unidades) ?></td>
        </tr>
    </table>
</div>
