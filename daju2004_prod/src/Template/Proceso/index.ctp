<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Proceso') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('enlaces') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_tiempo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('larga') ?></th>
        </thead>
        <tbody>
            <?php foreach ($proceso as $proceso): ?>
            <?php $my_url= $this->Url->build(['controller' => 'proceso', 'action' => 'view',$proceso->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($proceso->id) ?></td>
                <td class="w3-border"><?= h($proceso->name) ?></td>
                <td class="w3-border"><?= h($proceso->referencia) ?></td>
                <td class="w3-border"><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($proceso->precio) ?></td>
                <td class="w3-border"><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
                <td class="w3-border"><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
                <td class="w3-border"><?= h($proceso->observaciones) ?></td>
                <td class="w3-border"><?= h($proceso->visible) ?></td>
                <td class="w3-border"><?= h($proceso->enlaces) ?></td>
                <td class="w3-border"><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($proceso->segundos_tiempo) ?></td>
                <td class="w3-border"><?= h($proceso->coste_operaciones) ?></td>
                <td class="w3-border"><?= h($proceso->descripcion) ?></td>
                <td class="w3-border"><?= h($proceso->larga) ?></td>
                
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
