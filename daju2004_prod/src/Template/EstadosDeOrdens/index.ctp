<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['controller' => 'MaquinasUsadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['controller' => 'MaquinasUsadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['controller' => 'UtensiliosUsados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['controller' => 'UtensiliosUsados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadosDeOrdens index large-9 medium-8 columns content">
    <h3><?= __('Estados De Ordens') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                <td><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->id, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
                <td><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->id, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
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
