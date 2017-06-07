<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Objetos') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('defectuosos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($objetos as $objeto): ?>
            <?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($objeto->id) ?></td>
                <td><?= h($objeto->name) ?></td>
                <td><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($objeto->numero_serie) ?></td>
                <td><?= h($objeto->referencia) ?></td>
                <td><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
                <td><?= h($objeto->lote) ?></td>
                <td><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
                <td><?= $this->Number->format($objeto->coste) ?></td>
                <td><?= $this->Number->format($objeto->defectuosos) ?></td>
                <td><?= $this->Number->format($objeto->peso) ?></td>
                <td><?= h($objeto->observaciones) ?></td>
                
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
