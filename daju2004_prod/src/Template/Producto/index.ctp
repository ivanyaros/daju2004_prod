<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Producto') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia_proveedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ancho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('largo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tolerancia') ?></th>
        </thead>
        <tbody>
            <?php foreach ($producto as $producto): ?>
            <?php $my_url= $this->Url->build(['controller' => 'producto', 'action' => 'view',$producto->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->name) ?></td>
                <td><?= h($producto->referencia) ?></td>
                <td><?= h($producto->referencia_proveedor) ?></td>
                <td><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
                <td><?= $this->Number->format($producto->precio) ?></td>
                <td><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
                <td><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
                <td><?= h($producto->observaciones) ?></td>
                <td><?= h($producto->visible) ?></td>
                <td><?= $this->Number->format($producto->peso) ?></td>
                <td><?= $this->Number->format($producto->cantidad) ?></td>
                <td><?= h($producto->descripcion) ?></td>
                <td><?= h($producto->larga) ?></td>
                <td><?= $this->Number->format($producto->coste) ?></td>
                <td><?= $this->Number->format($producto->ancho) ?></td>
                <td><?= $this->Number->format($producto->largo) ?></td>
                <td><?= $this->Number->format($producto->tolerancia) ?></td>
                
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
