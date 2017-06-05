<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Envios Objeto') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios', 'action' => 'index']) ?>"><?= __('List Envios') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Envios','action' => 'add']) ?>"><?= __('New Envio') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos', 'action' => 'index']) ?>"><?= __('List Objetos') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos','action' => 'add']) ?>"><?= __('New Objeto') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Envios Objetos') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('envio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enviosObjetos as $enviosObjeto): ?>
            <tr>
                <td><?= $this->Number->format($enviosObjeto->id) ?></td>
                <td><?= $enviosObjeto->has('envio') ? $this->Html->link($enviosObjeto->envio->label, ['controller' => 'Envios', 'action' => 'view', $enviosObjeto->envio->id]) : '' ?></td>
                <td><?= $enviosObjeto->has('objeto') ? $this->Html->link($enviosObjeto->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $enviosObjeto->objeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enviosObjeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enviosObjeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enviosObjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enviosObjeto->id)]) ?>
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
