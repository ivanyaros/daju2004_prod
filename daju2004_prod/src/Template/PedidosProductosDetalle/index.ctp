<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Pedidos Productos Detalle') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado') ?></th>
        </thead>
        <tbody>
            <?php foreach ($pedidosProductosDetalle as $pedidosProductosDetalle): ?>
            <?php $my_url= $this->Url->build(['controller' => 'pedidosProductosDetalle', 'action' => 'view',$pedidosProductosDetalle->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($pedidosProductosDetalle->id) ?></td>
                <td><?= $pedidosProductosDetalle->has('pedidos_empresa') ? $this->Html->link($pedidosProductosDetalle->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosProductosDetalle->pedidos_empresa->id]) : '' ?></td>
                <td><?= $pedidosProductosDetalle->has('producto') ? $this->Html->link($pedidosProductosDetalle->producto->label, ['controller' => 'Producto', 'action' => 'view', $pedidosProductosDetalle->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($pedidosProductosDetalle->cantidad) ?></td>
                <td><?= h($pedidosProductosDetalle->fecha) ?></td>
                <td><?= h($pedidosProductosDetalle->observaciones) ?></td>
                <td><?= $pedidosProductosDetalle->has('prioridade') ? $this->Html->link($pedidosProductosDetalle->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $pedidosProductosDetalle->prioridade->id]) : '' ?></td>
                <td><?= h($pedidosProductosDetalle->terminado) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
