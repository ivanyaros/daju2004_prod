<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Maquinas Usadas') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maquina_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($maquinasUsadas as $maquinasUsada): ?>
            <?php $my_url= $this->Url->build(['controller' => 'maquinasUsadas', 'action' => 'view',$maquinasUsada->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($maquinasUsada->id) ?></td>
                <td><?= $maquinasUsada->has('estados_de_orden') ? $this->Html->link($maquinasUsada->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $maquinasUsada->estados_de_orden->id]) : '' ?></td>
                <td><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->label, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
                <td><?= $this->Number->format($maquinasUsada->operaciones) ?></td>
                <td><?= $this->Number->format($maquinasUsada->uso) ?></td>
                <td><?= h($maquinasUsada->observaciones) ?></td>
                
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
