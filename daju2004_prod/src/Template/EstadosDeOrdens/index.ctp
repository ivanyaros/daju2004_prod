<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item"><?= __('Actions') ?></h3>
    <a class="w3-bar-item w3-button" href="<?= $this->Url->build(['action' => 'add']) ?>"
    ><?= __('New Estados De Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens', 'action' => 'index']) ?>"><?= __('List Ordens') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Ordens','action' => 'add']) ?>"><?= __('New Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Estados', 'action' => 'index']) ?>"><?= __('List Estados') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'Estados','action' => 'add']) ?>"><?= __('New Estado') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaquinasUsadas', 'action' => 'index']) ?>"><?= __('List Maquinas Usadas') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'MaquinasUsadas','action' => 'add']) ?>"><?= __('New Maquinas Usada') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?>"><?= __('List Usuarios En Estados Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'UsuariosEnEstadosOrden','action' => 'add']) ?>"><?= __('New Usuarios En Estados Orden') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'UtensiliosUsados', 'action' => 'index']) ?>"><?= __('List Utensilios Usados') ?></a>
	<a class="w3-bar-item w3-button" href="<?= $this->Url->build(['controller' => 'UtensiliosUsados','action' => 'add']) ?>"><?= __('New Utensilios Usado') ?></a>
    
</div>
<div style="margin-left:25%">
<div class="w3 container w3-theme">
    <h3><?= __('Estados De Ordens') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-bordered w3-hoverable w3-theme">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estadosDeOrdens as $estadosDeOrden): ?>
            <tr>
                <td><?= $this->Number->format($estadosDeOrden->id) ?></td>
                <td><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->label, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
                <td><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->label, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
                <td><?= h($estadosDeOrden->fecha_inicio) ?></td>
                <td><?= h($estadosDeOrden->fecha_fin) ?></td>
                <td><?= h($estadosDeOrden->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estadosDeOrden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadosDeOrden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadosDeOrden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosDeOrden->id)]) ?>
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
