<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Producto') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('referencia_proveedor') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('ue') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('larga') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('ancho') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('largo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('tolerancia') ?></th>
        </thead>
        <tbody>
            <?php foreach ($producto as $producto): ?>
            <?php $my_url= $this->Url->build(['controller' => 'producto', 'action' => 'view',$producto->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($producto->id) ?></td>
                <td class="w3-border"><?= h($producto->name) ?></td>
                <td class="w3-border"><?= h($producto->referencia) ?></td>
                <td class="w3-border"><?= h($producto->referencia_proveedor) ?></td>
                <td class="w3-border"><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->precio) ?></td>
                <td class="w3-border"><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
                <td class="w3-border"><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
                <td class="w3-border"><?= h($producto->observaciones) ?></td>
                <td class="w3-border"><?= h($producto->visible) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->peso) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->ue) ?></td>
                <td class="w3-border"><?= h($producto->descripcion) ?></td>
                <td class="w3-border"><?= h($producto->larga) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->coste) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->ancho) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->largo) ?></td>
                <td class="w3-border"><?= $this->Number->format($producto->tolerancia) ?></td>
                
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
