<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Tareas') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('subproceso_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_duracion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
        </thead>
        <tbody>
            <?php foreach ($tareas as $tarea): ?>
            <?php $my_url= $this->Url->build(['controller' => 'tareas', 'action' => 'view',$tarea->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($tarea->id) ?></td>
                <td class="w3-border"><?= $tarea->has('subproceso') ? $this->Html->link($tarea->subproceso->label, ['controller' => 'Subproceso', 'action' => 'view', $tarea->subproceso->id]) : '' ?></td>
                <td class="w3-border"><?= $tarea->has('orden') ? $this->Html->link($tarea->orden->label, ['controller' => 'Ordens', 'action' => 'view', $tarea->orden->id]) : '' ?></td>
                <td class="w3-border"><?= h($tarea->fecha_inicio) ?></td>
                <td class="w3-border"><?= $this->Number->format($tarea->segundos_duracion) ?></td>
                <td class="w3-border"><?= h($tarea->descripcion) ?></td>
                
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
