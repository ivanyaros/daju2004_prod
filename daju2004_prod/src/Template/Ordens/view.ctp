<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orden'), ['action' => 'edit', $orden->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orden'), ['action' => 'delete', $orden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orden->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orden'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prioridades'), ['controller' => 'Prioridades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prioridade'), ['controller' => 'Prioridades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordens view large-9 medium-8 columns content">
    <h3><?= h($orden->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($orden->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($orden->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $orden->has('estado') ? $this->Html->link($orden->estado->id, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $orden->has('centro') ? $this->Html->link($orden->centro->id, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($orden->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->id, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($orden->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($orden->scrap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste') ?></th>
            <td><?= $this->Number->format($orden->coste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creacion') ?></th>
            <td><?= h($orden->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Terminacion') ?></th>
            <td><?= h($orden->fecha_terminacion) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Estados De Ordens') ?></h4>
        <?php if (!empty($orden->estados_de_ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha Fin') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($orden->estados_de_ordens as $estadosDeOrdens): ?>
            <tr>
                <td><?= h($estadosDeOrdens->id) ?></td>
                <td><?= h($estadosDeOrdens->orden_id) ?></td>
                <td><?= h($estadosDeOrdens->estado_id) ?></td>
                <td><?= h($estadosDeOrdens->fecha_inicio) ?></td>
                <td><?= h($estadosDeOrdens->fecha_fin) ?></td>
                <td><?= h($estadosDeOrdens->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EstadosDeOrdens', 'action' => 'view', $estadosDeOrdens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EstadosDeOrdens', 'action' => 'edit', $estadosDeOrdens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EstadosDeOrdens', 'action' => 'delete', $estadosDeOrdens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosDeOrdens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($orden->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Numero Serie') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($orden->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->numero_serie) ?></td>
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
</div>
