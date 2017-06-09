<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Estados De Ordens') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
        </thead>
        <tbody>
            <?php foreach ($estadosDeOrdens as $estadosDeOrden): ?>
            <?php $my_url= $this->Url->build(['controller' => 'estadosDeOrdens', 'action' => 'view',$estadosDeOrden->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($estadosDeOrden->id) ?></td>
                <td class="w3-border"><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->label, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
                <td class="w3-border"><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->label, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
                <td class="w3-border"><?= h($estadosDeOrden->fecha_inicio) ?></td>
                <td class="w3-border"><?= h($estadosDeOrden->fecha_fin) ?></td>
                <td class="w3-border"><?= h($estadosDeOrden->descripcion) ?></td>
                
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
