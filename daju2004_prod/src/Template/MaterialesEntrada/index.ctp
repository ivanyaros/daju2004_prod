<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Materiales Entrada') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_gastados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($materialesEntrada as $materialesEntrada): ?>
            <?php $my_url= $this->Url->build(['controller' => 'materialesEntrada', 'action' => 'view',$materialesEntrada->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($materialesEntrada->id) ?></td>
                <td><?= $materialesEntrada->has('objeto') ? $this->Html->link($materialesEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $materialesEntrada->objeto->id]) : '' ?></td>
                <td><?= $materialesEntrada->has('materiale') ? $this->Html->link($materialesEntrada->materiale->label, ['controller' => 'Materiales', 'action' => 'view', $materialesEntrada->materiale->id]) : '' ?></td>
                <td><?= $this->Number->format($materialesEntrada->cantidad_producida) ?></td>
                <td><?= $this->Number->format($materialesEntrada->metros_gastados) ?></td>
                <td><?= $this->Number->format($materialesEntrada->metros_utiles) ?></td>
                <td><?= $this->Number->format($materialesEntrada->scrap) ?></td>
                <td><?= h($materialesEntrada->observaciones) ?></td>
                
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
