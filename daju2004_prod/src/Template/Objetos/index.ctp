<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Objetos') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('coste') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('defectuosos') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('envio_id') ?></th>
        </thead>
        <tbody>
            <?php foreach ($objetos as $objeto): ?>
            <?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($objeto->id) ?></td>
                <td class="w3-border"><?= h($objeto->name) ?></td>
                <td class="w3-border"><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($objeto->numero_serie) ?></td>
                <td class="w3-border"><?= h($objeto->referencia) ?></td>
                <td class="w3-border"><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
                <td class="w3-border"><?= h($objeto->lote) ?></td>
                <td class="w3-border"><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
                <td class="w3-border"><?= $this->Number->format($objeto->coste) ?></td>
                <td class="w3-border"><?= $this->Number->format($objeto->defectuosos) ?></td>
                <td class="w3-border"><?= $this->Number->format($objeto->peso) ?></td>
                <td class="w3-border"><?= h($objeto->observaciones) ?></td>
                <td class="w3-border"><?= $objeto->has('envio') ? $this->Html->link($objeto->envio->label, ['controller' => 'Envios', 'action' => 'view', $objeto->envio->id]) : '' ?></td>
                
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
