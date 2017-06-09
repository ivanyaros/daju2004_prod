<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Material') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('longitud') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('anchura') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('profundidad') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('gramaje') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('peso_ud') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('unidades_embalaje') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('visible') ?></th>
        </thead>
        <tbody>
            <?php foreach ($material as $material): ?>
            <?php $my_url= $this->Url->build(['controller' => 'material', 'action' => 'view',$material->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($material->id) ?></td>
                <td class="w3-border"><?= h($material->name) ?></td>
                <td class="w3-border"><?= h($material->referencia) ?></td>
                <td class="w3-border"><?= h($material->referencia_proveedor) ?></td>
                <td class="w3-border"><?= $material->has('familia') ? $this->Html->link($material->familia->label, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($material->longitud) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->anchura) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->profundidad) ?></td>
                <td class="w3-border"><?= h($material->color) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->gramaje) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->peso_ud) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->unidades_embalaje) ?></td>
                <td class="w3-border"><?= $this->Number->format($material->precio) ?></td>
                <td class="w3-border"><?= $material->has('moneda') ? $this->Html->link($material->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>
                <td class="w3-border"><?= $material->has('iva') ? $this->Html->link($material->iva->label, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
                <td class="w3-border"><?= h($material->observaciones) ?></td>
                <td class="w3-border"><?= h($material->visible) ?></td>
                
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
