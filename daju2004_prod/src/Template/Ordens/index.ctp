<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Ordens') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_creacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_terminacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id') ?></th>
        </thead>
        <tbody>
            <?php foreach ($ordens as $orden): ?>
            <?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($orden->id) ?></td>
                <td><?= h($orden->name) ?></td>
                <td><?= h($orden->referencia) ?></td>
                <td><?= $this->Number->format($orden->cantidad) ?></td>
                <td><?= h($orden->fecha_creacion) ?></td>
                <td><?= h($orden->fecha_terminacion) ?></td>
                <td><?= $orden->has('estado') ? $this->Html->link($orden->estado->label, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
                <td><?= $orden->has('centro') ? $this->Html->link($orden->centro->label, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
                <td><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
                <td><?= $this->Number->format($orden->scrap) ?></td>
                <td><?= $this->Number->format($orden->coste_operario) ?></td>
                <td><?= h($orden->observaciones) ?></td>
                <td><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
                
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
