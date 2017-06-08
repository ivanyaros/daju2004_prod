<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Objetos Entrada') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entrada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_entrada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($objetosEntrada as $objetosEntrada): ?>
            <?php $my_url= $this->Url->build(['controller' => 'objetosEntrada', 'action' => 'view',$objetosEntrada->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($objetosEntrada->id) ?></td>
                <td><?= $this->Number->format($objetosEntrada->entrada_id) ?></td>
                <td><?= $objetosEntrada->has('objeto') ? $this->Html->link($objetosEntrada->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $objetosEntrada->objeto->id]) : '' ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_entrada) ?></td>
                <td><?= $this->Number->format($objetosEntrada->cantidad_producida) ?></td>
                <td><?= h($objetosEntrada->observaciones) ?></td>
                
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
