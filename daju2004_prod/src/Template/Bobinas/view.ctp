<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bobina'), ['action' => 'edit', $bobina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bobina'), ['action' => 'delete', $bobina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bobina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bobinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bobina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bobinas view large-9 medium-8 columns content">
    <h3><?= h($bobina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($bobina->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bobina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($bobina->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras') ?></th>
            <td><?= $this->Number->format($bobina->taras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Brutos') ?></th>
            <td><?= $this->Number->format($bobina->metros_brutos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Netos') ?></th>
            <td><?= $this->Number->format($bobina->metros_netos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Actuales') ?></th>
            <td><?= $this->Number->format($bobina->metros_actuales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($bobina->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($bobina->scrap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('En Uso') ?></th>
            <td><?= $bobina->en_uso ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
