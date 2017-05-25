<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="prioridades view large-9 medium-8 columns content">
    <h3><?= h($prioridade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($prioridade->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prioridade->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordens') ?></h4>
        <?php if (!empty($prioridade->ordens)): ?>
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
                <th scope="col"><?= __('Coste Operario') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prioridade->ordens as $ordens): ?>
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
        <h4><?= __('Related Pedidos Productos Detalle') ?></h4>
        <?php if (!empty($prioridade->pedidos_productos_detalle)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prioridade->pedidos_productos_detalle as $pedidosProductosDetalle): ?>
            <tr>
                <td><?= h($pedidosProductosDetalle->id) ?></td>
                <td><?= h($pedidosProductosDetalle->pedidos_empresa_id) ?></td>
                <td><?= h($pedidosProductosDetalle->producto_id) ?></td>
                <td><?= h($pedidosProductosDetalle->cantidad) ?></td>
                <td><?= h($pedidosProductosDetalle->fecha) ?></td>
                <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
                <td><?= h($pedidosProductosDetalle->prioridade_id) ?></td>
                <td><?= h($pedidosProductosDetalle->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PedidosProductosDetalle', 'action' => 'view', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PedidosProductosDetalle', 'action' => 'edit', $pedidosProductosDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PedidosProductosDetalle', 'action' => 'delete', $pedidosProductosDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosProductosDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
