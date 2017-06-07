<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Pedidos Empresas') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado') ?></th>
        </thead>
        <tbody>
            <?php foreach ($pedidosEmpresas as $pedidosEmpresa): ?>
            <?php $my_url= $this->Url->build(['controller' => 'pedidosEmpresas', 'action' => 'view',$pedidosEmpresa->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($pedidosEmpresa->id) ?></td>
                <td><?= h($pedidosEmpresa->name) ?></td>
                <td><?= h($pedidosEmpresa->referencia) ?></td>
                <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($pedidosEmpresa->fecha) ?></td>
                <td><?= h($pedidosEmpresa->albaran) ?></td>
                <td><?= h($pedidosEmpresa->observaciones) ?></td>
                <td><?= h($pedidosEmpresa->terminado) ?></td>
                
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
