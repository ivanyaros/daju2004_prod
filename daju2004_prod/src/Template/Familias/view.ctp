<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Familia'), ['action' => 'edit', $familia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Familia'), ['action' => 'delete', $familia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Familias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="familias view large-9 medium-8 columns content">
    <h3><?= h($familia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($familia->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($familia->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($familia->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Material') ?></h4>
        <?php if (!empty($familia->material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Longitud') ?></th>
                <th scope="col"><?= __('Anchura') ?></th>
                <th scope="col"><?= __('Profundidad') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Gramaje') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col"><?= __('Unidades Embalaje') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($familia->material as $material): ?>
            <tr>
                <td><?= h($material->id) ?></td>
                <td><?= h($material->nombre) ?></td>
                <td><?= h($material->referencia) ?></td>
                <td><?= h($material->familia_id) ?></td>
                <td><?= h($material->longitud) ?></td>
                <td><?= h($material->anchura) ?></td>
                <td><?= h($material->profundidad) ?></td>
                <td><?= h($material->color) ?></td>
                <td><?= h($material->gramaje) ?></td>
                <td><?= h($material->peso_ud) ?></td>
                <td><?= h($material->unidades_embalaje) ?></td>
                <td><?= h($material->precio) ?></td>
                <td><?= h($material->moneda_id) ?></td>
                <td><?= h($material->iva_id) ?></td>
                <td><?= h($material->observaciones) ?></td>
                <td><?= h($material->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Material', 'action' => 'view', $material->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Material', 'action' => 'edit', $material->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Material', 'action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso') ?></h4>
        <?php if (!empty($familia->proceso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Enlaces') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Procesocol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($familia->proceso as $proceso): ?>
            <tr>
                <td><?= h($proceso->id) ?></td>
                <td><?= h($proceso->nombre) ?></td>
                <td><?= h($proceso->referencia) ?></td>
                <td><?= h($proceso->familia_id) ?></td>
                <td><?= h($proceso->precio) ?></td>
                <td><?= h($proceso->moneda_id) ?></td>
                <td><?= h($proceso->iva_id) ?></td>
                <td><?= h($proceso->observaciones) ?></td>
                <td><?= h($proceso->visible) ?></td>
                <td><?= h($proceso->enlaces) ?></td>
                <td><?= h($proceso->centro_id) ?></td>
                <td><?= h($proceso->procesocol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proceso', 'action' => 'view', $proceso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proceso', 'action' => 'edit', $proceso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proceso', 'action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Producto') ?></h4>
        <?php if (!empty($familia->producto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referencia Proveedor') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Larga') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($familia->producto as $producto): ?>
            <tr>
                <td><?= h($producto->id) ?></td>
                <td><?= h($producto->nombre) ?></td>
                <td><?= h($producto->referencia) ?></td>
                <td><?= h($producto->referencia_proveedor) ?></td>
                <td><?= h($producto->familia_id) ?></td>
                <td><?= h($producto->precio) ?></td>
                <td><?= h($producto->moneda_id) ?></td>
                <td><?= h($producto->iva_id) ?></td>
                <td><?= h($producto->observaciones) ?></td>
                <td><?= h($producto->visible) ?></td>
                <td><?= h($producto->peso) ?></td>
                <td><?= h($producto->cantidad) ?></td>
                <td><?= h($producto->descripcion) ?></td>
                <td><?= h($producto->larga) ?></td>
                <td><?= h($producto->coste) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Producto', 'action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Producto', 'action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Producto', 'action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
