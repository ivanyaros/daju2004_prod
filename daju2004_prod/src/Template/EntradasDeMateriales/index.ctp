<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Entradas De Materiales') ?></h3>
    <div class="w3-responsive">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['modulus' => 4,'first' => 2, 'last' => 2]) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>        
    </div>
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-centered w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_recepcion') ?></th>
        </thead>
        <tbody>
            <?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
            <?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($entradasDeMateriale->id) ?></td>
                <td class="w3-border"><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
                <td class="w3-border"><?= h($entradasDeMateriale->referencia) ?></td>
                <td class="w3-border"><?= h($entradasDeMateriale->observaciones) ?></td>
                <td class="w3-border"><?= h($entradasDeMateriale->albaran) ?></td>
                <td class="w3-border"><?= h($entradasDeMateriale->fecha_envio) ?></td>
                <td class="w3-border"><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
                <td class="w3-border"><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['modulus' => 4,'first' => 2, 'last' => 2]) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
