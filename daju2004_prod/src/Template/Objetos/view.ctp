<?php
/**
  * @var \App\View\AppView $this
  */
?>

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
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objeto->observaciones) ?></td>
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
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($objeto->peso) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales Entrada') ?>
        	<li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add',$objeto->id]) ?> </li>
        </h4>
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
    <div class="related">
        <h4><?= __('Related Envios') ?>
        	<li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add',$objeto->id]) ?> </li>
        </h4>
        <?php if (!empty($objeto->envios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Direccione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($objeto->envios as $envios): ?>
            <tr>
                <td><?= h($envios->id) ?></td>
                <td><?= h($envios->proveedores_cliente_id) ?></td>
                <td><?= h($envios->fecha_pedido) ?></td>
                <td><?= h($envios->fecha_envio) ?></td>
                <td><?= h($envios->albaran) ?></td>
                <td><?= h($envios->pedidos_empresa_id) ?></td>
                <td><?= h($envios->centro_id) ?></td>
                <td><?= h($envios->fecha_entrega) ?></td>
                <td><?= h($envios->observaciones) ?></td>
                <td><?= h($envios->direccione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Envios', 'action' => 'view', $envios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Envios', 'action' => 'edit', $envios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Envios', 'action' => 'delete', $envios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
