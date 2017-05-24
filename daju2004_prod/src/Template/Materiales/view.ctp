<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiale'), ['action' => 'edit', $materiale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiale'), ['action' => 'delete', $materiale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiales view large-9 medium-8 columns content">
    <h3><?= h($materiale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $materiale->has('material') ? $this->Html->link($materiale->material->id, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localizacione') ?></th>
            <td><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->id, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entradas Material') ?></th>
            <td><?= $materiale->has('entradas_material') ? $this->Html->link($materiale->entradas_material->id, ['controller' => 'EntradasMaterial', 'action' => 'view', $materiale->entradas_material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($materiale->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bobinas') ?></th>
            <td><?= $this->Number->format($materiale->bobinas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Bobina') ?></th>
            <td><?= $this->Number->format($materiale->numero_bobina) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras') ?></th>
            <td><?= $this->Number->format($materiale->taras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Brutos') ?></th>
            <td><?= $this->Number->format($materiale->metros_brutos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Netos') ?></th>
            <td><?= $this->Number->format($materiale->metros_netos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Actuales') ?></th>
            <td><?= $this->Number->format($materiale->metros_actuales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Utiles') ?></th>
            <td><?= $this->Number->format($materiale->metros_utiles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($materiale->scrap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Ud') ?></th>
            <td><?= $this->Number->format($materiale->peso_ud) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entega') ?></th>
            <td><?= h($materiale->fecha_entega) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bobina Lote') ?></th>
            <td><?= $materiale->bobina_lote ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('En Uso') ?></th>
            <td><?= $materiale->en_uso ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $materiale->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales Entrada') ?></h4>
        <?php if (!empty($materiale->materiales_entrada)): ?>
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
            <?php foreach ($materiale->materiales_entrada as $materialesEntrada): ?>
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
