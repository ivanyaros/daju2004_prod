<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Entradas De Materiales') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepcion') ?></th>
        </thead>
        <tbody>
            <?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
            <?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($entradasDeMateriale->id) ?></td>
                <td><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($entradasDeMateriale->referencia) ?></td>
                <td><?= h($entradasDeMateriale->observaciones) ?></td>
                <td><?= h($entradasDeMateriale->albaran) ?></td>
                <td><?= h($entradasDeMateriale->fecha_envio) ?></td>
                <td><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
                <td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
                
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
