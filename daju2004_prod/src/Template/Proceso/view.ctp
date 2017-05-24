<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proceso'), ['action' => 'edit', $proceso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proceso'), ['action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proceso view large-9 medium-8 columns content">
    <h3><?= h($proceso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($proceso->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($proceso->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->id, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->id, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->id, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proceso->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enlaces') ?></th>
            <td><?= h($proceso->enlaces) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->id, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Procesocol') ?></th>
            <td><?= h($proceso->procesocol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proceso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($proceso->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proceso->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordens') ?></h4>
        <?php if (!empty($proceso->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->id) ?></td>
                <td><?= h($ordens->nombre) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->centro_id) ?></td>
                <td><?= h($ordens->proceso_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
                <td><?= h($ordens->coste) ?></td>
                <td><?= h($ordens->observaciones) ?></td>
                <td><?= h($ordens->prioridade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ordens', 'action' => 'view', $ordens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ordens', 'action' => 'edit', $ordens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ordens', 'action' => 'delete', $ordens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso Material Entrada') ?></h4>
        <?php if (!empty($proceso->proceso_material_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Metros Lineales') ?></th>
                <th scope="col"><?= __('Metros Cuadrados') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_material_entrada as $procesoMaterialEntrada): ?>
            <tr>
                <td><?= h($procesoMaterialEntrada->id) ?></td>
                <td><?= h($procesoMaterialEntrada->proceso_id) ?></td>
                <td><?= h($procesoMaterialEntrada->material_id) ?></td>
                <td><?= h($procesoMaterialEntrada->metros_lineales) ?></td>
                <td><?= h($procesoMaterialEntrada->metros_cuadrados) ?></td>
                <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'view', $procesoMaterialEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'edit', $procesoMaterialEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'delete', $procesoMaterialEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoMaterialEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso Producto Entrada') ?></h4>
        <?php if (!empty($proceso->proceso_producto_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_producto_entrada as $procesoProductoEntrada): ?>
            <tr>
                <td><?= h($procesoProductoEntrada->id) ?></td>
                <td><?= h($procesoProductoEntrada->proceso_id) ?></td>
                <td><?= h($procesoProductoEntrada->producto_id) ?></td>
                <td><?= h($procesoProductoEntrada->cantidad) ?></td>
                <td><?= h($procesoProductoEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'view', $procesoProductoEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'edit', $procesoProductoEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'delete', $procesoProductoEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso Producto Salida') ?></h4>
        <?php if (!empty($proceso->proceso_producto_salida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_producto_salida as $procesoProductoSalida): ?>
            <tr>
                <td><?= h($procesoProductoSalida->id) ?></td>
                <td><?= h($procesoProductoSalida->proceso_id) ?></td>
                <td><?= h($procesoProductoSalida->producto_id) ?></td>
                <td><?= h($procesoProductoSalida->cantidad) ?></td>
                <td><?= h($procesoProductoSalida->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoProductoSalida', 'action' => 'view', $procesoProductoSalida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoProductoSalida', 'action' => 'edit', $procesoProductoSalida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoProductoSalida', 'action' => 'delete', $procesoProductoSalida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProductoSalida->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
