<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Direcciones') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($direcciones as $direccione): ?>
            <?php $my_url= $this->Url->build(['controller' => 'direcciones', 'action' => 'view',$direccione->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($direccione->id) ?></td>
                <td class="w3-border"><?= $direccione->has('proveedores_cliente') ? $this->Html->link($direccione->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $direccione->proveedores_cliente->id]) : '' ?></td>
                <td class="w3-border"><?= h($direccione->direccion) ?></td>
                <td class="w3-border"><?= h($direccione->telefono) ?></td>
                <td class="w3-border"><?= h($direccione->fax) ?></td>
                <td class="w3-border"><?= h($direccione->correo) ?></td>
                <td class="w3-border"><?= h($direccione->pagina_web) ?></td>
                <td class="w3-border"><?= h($direccione->observaciones) ?></td>
                
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
