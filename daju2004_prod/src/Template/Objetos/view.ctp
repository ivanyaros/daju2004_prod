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
        <li><?= $this->Html->link(__('List Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Numero Serie') ?></th>
            <td><?= $this->Number->format($objeto->numero_serie) ?></td>
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
        <h4><?= __('Related Materiales Entrada') ?></h4>
        <?php if (!empty($objeto->materiales_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Objeto Id') ?></th>
                <th scope="col"><?= __('Materiale Id') ?></th>
                <th scope="col"><?= __('Cantidad Producida') ?></th>
                <th scope="col"><?= __('Metros Gastados') ?></th>
                <th scope="col"><?= __('Metros Utiles') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($objeto->materiales_entrada as $materialesEntrada): ?>
            <tr>
                <td><?= h($materialesEntrada->id) ?></td>
                <td><?= h($materialesEntrada->objeto_id) ?></td>
                <td><?= h($materialesEntrada->materiale_id) ?></td>
                <td><?= h($materialesEntrada->cantidad_producida) ?></td>
                <td><?= h($materialesEntrada->metros_gastados) ?></td>
                <td><?= h($materialesEntrada->metros_utiles) ?></td>
                <td><?= h($materialesEntrada->scrap) ?></td>
                <td><?= h($materialesEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MaterialesEntrada', 'action' => 'view', $materialesEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MaterialesEntrada', 'action' => 'edit', $materialesEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaterialesEntrada', 'action' => 'delete', $materialesEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesEntrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
