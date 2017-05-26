<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prioridades'), ['controller' => 'Prioridades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prioridade'), ['controller' => 'Prioridades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordens index large-9 medium-8 columns content">
    <h3><?= __('Ordens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_terminacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordens as $orden): ?>
            <tr>
                <td><?= $this->Number->format($orden->id) ?></td>
                <td><?= h($orden->name) ?></td>
                <td><?= h($orden->referencia) ?></td>
                <td><?= $this->Number->format($orden->cantidad) ?></td>
                <td><?= h($orden->fecha_creacion) ?></td>
                <td><?= h($orden->fecha_terminacion) ?></td>
                <td><?= $orden->has('estado') ? $this->Html->link($orden->estado->id, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
                <td><?= $orden->has('centro') ? $this->Html->link($orden->centro->name, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
                <td><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
                <td><?= $this->Number->format($orden->scrap) ?></td>
                <td><?= $this->Number->format($orden->coste_operario) ?></td>
                <td><?= h($orden->observaciones) ?></td>
                <td><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->id, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orden->id)]) ?>
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
