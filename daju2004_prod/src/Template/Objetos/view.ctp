<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objeto'), ['action' => 'edit', $objeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objeto'), ['action' => 'delete', $objeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objetos view large-9 medium-8 columns content">
    <h3><?= h($objeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->id, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($objeto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->id, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($objeto->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localizacione') ?></th>
            <td><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->id, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste') ?></th>
            <td><?= $this->Number->format($objeto->coste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Defectuosos') ?></th>
            <td><?= $this->Number->format($objeto->defectuosos) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales') ?></h4>
        <?php if (!empty($objeto->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Entradas Material Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($objeto->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->id) ?></td>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_material_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materiales', 'action' => 'view', $materiales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materiales', 'action' => 'edit', $materiales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materiales', 'action' => 'delete', $materiales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($objeto->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($objeto->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objetos', 'action' => 'view', $objetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objetos', 'action' => 'edit', $objetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objetos', 'action' => 'delete', $objetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Material') ?></h4>
        <?php if (!empty($objeto->material)): ?>
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
            <?php foreach ($objeto->material as $material): ?>
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
</div>
