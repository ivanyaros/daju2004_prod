<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Objetos Entrada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos', 'action' => 'index']) ?>"><?= __('List Objetos') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos','action' => 'add']) ?>"><?= __('New Objeto') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Objetos Entrada') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entrada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salida_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_entrada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetosEntrada as $objetosEntrada): ?>
            <tr>
                <td><?= $this->Number->format($objetosEntrada->id) ?></td>
                <td><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
                <td><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
                <td><?= h($objetosEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $objetosEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $objetosEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $objetosEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosEntrada->id)]) ?>
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
