<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Envios') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccione_id') ?></th>
        </thead>
        <tbody>
            <?php foreach ($envios as $envio): ?>
            <?php $my_url= $this->Url->build(['controller' => 'envios', 'action' => 'view',$envio->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($envio->id) ?></td>
                <td><?= $envio->has('proveedores_cliente') ? $this->Html->link($envio->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $envio->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($envio->fecha_pedido) ?></td>
                <td><?= h($envio->fecha_envio) ?></td>
                <td><?= h($envio->albaran) ?></td>
                <td><?= $envio->has('pedidos_empresa') ? $this->Html->link($envio->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $envio->pedidos_empresa->id]) : '' ?></td>
                <td><?= $envio->has('centro') ? $this->Html->link($envio->centro->label, ['controller' => 'Centros', 'action' => 'view', $envio->centro->id]) : '' ?></td>
                <td><?= h($envio->fecha_entrega) ?></td>
                <td><?= h($envio->observaciones) ?></td>
                <td><?= $envio->has('direccione') ? $this->Html->link($envio->direccione->label, ['controller' => 'Direcciones', 'action' => 'view', $envio->direccione->id]) : '' ?></td>
                
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
