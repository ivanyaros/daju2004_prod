<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proceso index large-9 medium-8 columns content">
    <h3><?= __('Proceso') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enlaces') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_tiempo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proceso as $proceso): ?>
            <tr>
                <td><?= $this->Number->format($proceso->id) ?></td>
                <td><?= h($proceso->name) ?></td>
                <td><?= h($proceso->referencia) ?></td>
                <td><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
                <td><?= $this->Number->format($proceso->precio) ?></td>
                <td><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
                <td><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
                <td><?= h($proceso->observaciones) ?></td>
                <td><?= h($proceso->visible) ?></td>
                <td><?= h($proceso->enlaces) ?></td>
                <td><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
                <td><?= $this->Number->format($proceso->coste_tiempo) ?></td>
                <td><?= h($proceso->coste_operaciones) ?></td>
                <td><?= h($proceso->descripcion) ?></td>
                <td><?= h($proceso->larga) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proceso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proceso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?>
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
