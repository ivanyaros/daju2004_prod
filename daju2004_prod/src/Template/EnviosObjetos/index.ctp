<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Envios Objeto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envios'), ['controller' => 'Envios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enviosObjetos index large-9 medium-8 columns content">
    <h3><?= __('Envios Objetos') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                <td><?= $enviosObjeto->has('envio') ? $this->Html->link($enviosObjeto->envio->id, ['controller' => 'Envios', 'action' => 'view', $enviosObjeto->envio->id]) : '' ?></td>
                <td><?= $enviosObjeto->has('objeto') ? $this->Html->link($enviosObjeto->objeto->id, ['controller' => 'Objetos', 'action' => 'view', $enviosObjeto->objeto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enviosObjeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enviosObjeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enviosObjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enviosObjeto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
