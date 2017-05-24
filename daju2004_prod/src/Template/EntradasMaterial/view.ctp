<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entradas Material'), ['action' => 'edit', $entradasMaterial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entradas Material'), ['action' => 'delete', $entradasMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasMaterial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entradasMaterial view large-9 medium-8 columns content">
    <h3><?= h($entradasMaterial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $entradasMaterial->has('proveedores_cliente') ? $this->Html->link($entradasMaterial->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasMaterial->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($entradasMaterial->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($entradasMaterial->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($entradasMaterial->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $entradasMaterial->has('centro') ? $this->Html->link($entradasMaterial->centro->id, ['controller' => 'Centros', 'action' => 'view', $entradasMaterial->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entradasMaterial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($entradasMaterial->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales') ?></h4>
        <?php if (!empty($entradasMaterial->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Entradas Material Id') ?></th>
                <th scope="col"><?= __('Bobina Lote') ?></th>
                <th scope="col"><?= __('Bobinas') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Numero Bobina') ?></th>
                <th scope="col"><?= __('Taras') ?></th>
                <th scope="col"><?= __('Metros Brutos') ?></th>
                <th scope="col"><?= __('Metros Netos') ?></th>
                <th scope="col"><?= __('Metros Actuales') ?></th>
                <th scope="col"><?= __('Metros Utiles') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('En Uso') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entradasMaterial->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->id) ?></td>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_material_id) ?></td>
                <td><?= h($materiales->bobina_lote) ?></td>
                <td><?= h($materiales->bobinas) ?></td>
                <td><?= h($materiales->lote) ?></td>
                <td><?= h($materiales->numero_bobina) ?></td>
                <td><?= h($materiales->taras) ?></td>
                <td><?= h($materiales->metros_brutos) ?></td>
                <td><?= h($materiales->metros_netos) ?></td>
                <td><?= h($materiales->metros_actuales) ?></td>
                <td><?= h($materiales->metros_utiles) ?></td>
                <td><?= h($materiales->scrap) ?></td>
                <td><?= h($materiales->en_uso) ?></td>
                <td><?= h($materiales->terminado) ?></td>
                <td><?= h($materiales->peso_ud) ?></td>
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
</div>
