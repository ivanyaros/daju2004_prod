<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Estados', 'action' => 'index']) ?>"><?= __('List Estados') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Estados','action' => 'add']) ?>"><?= __('New Estado') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Centros', 'action' => 'index']) ?>"><?= __('List Centros') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Centros','action' => 'add']) ?>"><?= __('New Centro') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Proceso', 'action' => 'index']) ?>"><?= __('List Proceso') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Proceso','action' => 'add']) ?>"><?= __('New Proceso') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Prioridades', 'action' => 'index']) ?>"><?= __('List Prioridades') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Prioridades','action' => 'add']) ?>"><?= __('New Prioridade') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?>"><?= __('List Estados De Ordens') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'EstadosDeOrdens','action' => 'add']) ?>"><?= __('New Estados De Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos', 'action' => 'index']) ?>"><?= __('List Objetos') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Objetos','action' => 'add']) ?>"><?= __('New Objeto') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Ordens') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
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
                <td><?= $orden->has('estado') ? $this->Html->link($orden->estado->label, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
                <td><?= $orden->has('centro') ? $this->Html->link($orden->centro->label, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
                <td><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
                <td><?= $this->Number->format($orden->scrap) ?></td>
                <td><?= $this->Number->format($orden->coste_operario) ?></td>
                <td><?= h($orden->observaciones) ?></td>
                <td><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orden->id)]) ?>
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
