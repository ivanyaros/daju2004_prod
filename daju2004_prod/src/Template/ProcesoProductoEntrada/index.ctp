<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Proceso Producto Entrada') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
            <?php $my_url= $this->Url->build(['controller' => 'procesoProductoEntrada', 'action' => 'view',$procesoProductoEntrada->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($procesoProductoEntrada->id) ?></td>
                <td class="w3-border"><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>
                <td class="w3-border"><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->label, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($procesoProductoEntrada->cantidad) ?></td>
                <td class="w3-border"><?= h($procesoProductoEntrada->observaciones) ?></td>
                
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
