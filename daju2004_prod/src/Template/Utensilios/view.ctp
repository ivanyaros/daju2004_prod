<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Utensilio'), ['action' => 'edit', $utensilio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utensilio'), ['action' => 'delete', $utensilio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensilio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="utensilios view large-9 medium-8 columns content">
    <h3><?= h($utensilio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($utensilio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($utensilio->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensilio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensilio->id) ?></td>
        </tr>
    </table>
</div>
