<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Maquina') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaquinasUsadas', 'action' => 'index']) ?>"><?= __('List Maquinas Usadas') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaquinasUsadas','action' => 'add']) ?>"><?= __('New Maquinas Usada') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Maquinas') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_tiempo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maquinas as $maquina): ?>
            <tr>
                <td><?= $this->Number->format($maquina->id) ?></td>
                <td><?= h($maquina->name) ?></td>
                <td><?= h($maquina->referencia) ?></td>
                <td><?= h($maquina->observaciones) ?></td>
                <td><?= $this->Number->format($maquina->coste_operacion) ?></td>
                <td><?= $this->Number->format($maquina->coste_tiempo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maquina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maquina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id)]) ?>
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
