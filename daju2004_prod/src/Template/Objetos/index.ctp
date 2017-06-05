<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Objeto') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Producto', 'action' => 'index']) ?>"><?= __('List Producto') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Producto','action' => 'add']) ?>"><?= __('New Producto') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens', 'action' => 'index']) ?>"><?= __('List Ordens') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens','action' => 'add']) ?>"><?= __('New Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones', 'action' => 'index']) ?>"><?= __('List Localizaciones') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones','action' => 'add']) ?>"><?= __('New Localizacione') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaterialesEntrada', 'action' => 'index']) ?>"><?= __('List Materiales Entrada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaterialesEntrada','action' => 'add']) ?>"><?= __('New Materiales Entrada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios', 'action' => 'index']) ?>"><?= __('List Envios') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios','action' => 'add']) ?>"><?= __('New Envio') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Objetos') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('defectuosos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetos as $objeto): ?>
            <tr>
                <td><?= $this->Number->format($objeto->id) ?></td>
                <td><?= h($objeto->name) ?></td>
                <td><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($objeto->numero_serie) ?></td>
                <td><?= h($objeto->referencia) ?></td>
                <td><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
                <td><?= h($objeto->lote) ?></td>
                <td><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
                <td><?= $this->Number->format($objeto->coste) ?></td>
                <td><?= $this->Number->format($objeto->defectuosos) ?></td>
                <td><?= $this->Number->format($objeto->peso) ?></td>
                <td><?= h($objeto->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $objeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $objeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $objeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objeto->id)]) ?>
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
