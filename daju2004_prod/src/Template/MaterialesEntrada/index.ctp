<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Materiales Entrada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos', 'action' => 'index']) ?>"><?= __('List Objetos') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos','action' => 'add']) ?>"><?= __('New Objeto') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Materiales', 'action' => 'index']) ?>"><?= __('List Materiales') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Materiales','action' => 'add']) ?>"><?= __('New Materiale') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Materiales Entrada') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_gastados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materialesEntrada as $materialesEntrada): ?>
            <tr>
                <td><?= $this->Number->format($materialesEntrada->id) ?></td>
                <td><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>
                <td><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->label, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
                <td><?= $this->Number->format($materialesEntrada->cantidad_producida) ?></td>
                <td><?= $this->Number->format($materialesEntrada->metros_gastados) ?></td>
                <td><?= $this->Number->format($materialesEntrada->metros_utiles) ?></td>
                <td><?= $this->Number->format($materialesEntrada->scrap) ?></td>
                <td><?= h($materialesEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materialesEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialesEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialesEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
