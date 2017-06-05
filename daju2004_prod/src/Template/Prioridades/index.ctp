<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Prioridade') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens', 'action' => 'index']) ?>"><?= __('List Ordens') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens','action' => 'add']) ?>"><?= __('New Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?>"><?= __('List Pedidos Productos Detalle') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'PedidosProductosDetalle','action' => 'add']) ?>"><?= __('New Pedidos Productos Detalle') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Prioridades') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prioridades as $prioridade): ?>
            <tr>
                <td><?= $this->Number->format($prioridade->id) ?></td>
                <td><?= h($prioridade->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prioridade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prioridade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prioridade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prioridade->id)]) ?>
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
