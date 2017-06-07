<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Material') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia_proveedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitud') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anchura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profundidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramaje') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_ud') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidades_embalaje') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
        </thead>
        <tbody>
            <?php foreach ($material as $material): ?>
            <?php $my_url= $this->Url->build(['controller' => 'material', 'action' => 'view',$material->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($material->id) ?></td>
                <td><?= h($material->name) ?></td>
                <td><?= h($material->referencia) ?></td>
                <td><?= h($material->referencia_proveedor) ?></td>
                <td><?= $material->has('familia') ? $this->Html->link($material->familia->label, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
                <td><?= $this->Number->format($material->longitud) ?></td>
                <td><?= $this->Number->format($material->anchura) ?></td>
                <td><?= $this->Number->format($material->profundidad) ?></td>
                <td><?= h($material->color) ?></td>
                <td><?= $this->Number->format($material->gramaje) ?></td>
                <td><?= $this->Number->format($material->peso_ud) ?></td>
                <td><?= $this->Number->format($material->unidades_embalaje) ?></td>
                <td><?= $this->Number->format($material->precio) ?></td>
                <td><?= $material->has('moneda') ? $this->Html->link($material->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>
                <td><?= $material->has('iva') ? $this->Html->link($material->iva->label, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
                <td><?= h($material->observaciones) ?></td>
                <td><?= h($material->visible) ?></td>
                
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
