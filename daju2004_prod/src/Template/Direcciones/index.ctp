<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Direcciones') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($direcciones as $direccione): ?>
            <?php $my_url= $this->Url->build(['controller' => 'direcciones', 'action' => 'view',$direccione->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($direccione->id) ?></td>
                <td><?= $direccione->has('proveedores_cliente') ? $this->Html->link($direccione->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $direccione->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($direccione->direccion) ?></td>
                <td><?= h($direccione->telefono) ?></td>
                <td><?= h($direccione->fax) ?></td>
                <td><?= h($direccione->correo) ?></td>
                <td><?= h($direccione->pagina_web) ?></td>
                <td><?= h($direccione->observaciones) ?></td>
                
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
