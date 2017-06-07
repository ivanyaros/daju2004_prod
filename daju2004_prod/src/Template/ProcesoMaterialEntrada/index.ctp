<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Proceso Material Entrada') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_lineales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_cuadrados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($procesoMaterialEntrada as $procesoMaterialEntrada): ?>
            <?php $my_url= $this->Url->build(['controller' => 'procesoMaterialEntrada', 'action' => 'view',$procesoMaterialEntrada->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($procesoMaterialEntrada->id) ?></td>
                <td><?= $procesoMaterialEntrada->has('proceso') ? $this->Html->link($procesoMaterialEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterialEntrada->proceso->id]) : '' ?></td>
                <td><?= $procesoMaterialEntrada->has('material') ? $this->Html->link($procesoMaterialEntrada->material->label, ['controller' => 'Material', 'action' => 'view', $procesoMaterialEntrada->material->id]) : '' ?></td>
                <td><?= $this->Number->format($procesoMaterialEntrada->metros_lineales) ?></td>
                <td><?= $this->Number->format($procesoMaterialEntrada->metros_cuadrados) ?></td>
                <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
                
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
