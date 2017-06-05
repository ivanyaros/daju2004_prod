<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Centro') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales', 'action' => 'index']) ?>"><?= __('List Entradas De Materiales') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EntradasDeMateriales','action' => 'add']) ?>"><?= __('New Entradas De Materiale') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios', 'action' => 'index']) ?>"><?= __('List Envios') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios','action' => 'add']) ?>"><?= __('New Envio') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones', 'action' => 'index']) ?>"><?= __('List Localizaciones') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Localizaciones','action' => 'add']) ?>"><?= __('New Localizacione') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens', 'action' => 'index']) ?>"><?= __('List Ordens') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens','action' => 'add']) ?>"><?= __('New Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Proceso', 'action' => 'index']) ?>"><?= __('List Proceso') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Proceso','action' => 'add']) ?>"><?= __('New Proceso') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Centros') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centros as $centro): ?>
            <tr>
                <td><?= $this->Number->format($centro->id) ?></td>
                <td><?= h($centro->name) ?></td>
                <td><?= h($centro->referencia) ?></td>
                <td><?= h($centro->direccion) ?></td>
                <td><?= h($centro->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]) ?>
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
