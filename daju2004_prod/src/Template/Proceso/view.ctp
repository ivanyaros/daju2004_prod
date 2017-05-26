<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proceso view large-9 medium-8 columns content">
    <h3><?= h($proceso->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($proceso->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($proceso->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
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
            <td><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operaciones') ?></th>
            <td><?= h($proceso->coste_operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($proceso->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Larga') ?></th>
            <td><?= h($proceso->larga) ?></td>
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
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($proceso->coste_tiempo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proceso->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordens') ?>
        	<li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add',$proceso->id,'proceso_id']) ?> </li>
        </h4>
        <?php if (!empty($proceso->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Coste Operario') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->name) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->centro_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
                <td><?= h($ordens->coste_operario) ?></td>
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
        <h4><?= __('Related Proceso Material Entrada') ?>
        	<li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add',$proceso->id,'proceso_id']) ?> </li>
        </h4>
        <?php if (!empty($proceso->proceso_material_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Metros Lineales') ?></th>
                <th scope="col"><?= __('Metros Cuadrados') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_material_entrada as $procesoMaterialEntrada): ?>
            <tr>
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
        <h4><?= __('Related Proceso Producto Entrada') ?>
        	<li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add',$proceso->id,'proceso_id']) ?> </li>
        </h4>
        <?php if (!empty($proceso->proceso_producto_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_producto_entrada as $procesoProductoEntrada): ?>
            <tr>
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
        <h4><?= __('Related Proceso Producto Salida') ?>
        	<li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add',$proceso->id,'proceso_id']) ?> </li>
        </h4>
        <?php if (!empty($proceso->proceso_producto_salida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proceso->proceso_producto_salida as $procesoProductoSalida): ?>
            <tr>
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
