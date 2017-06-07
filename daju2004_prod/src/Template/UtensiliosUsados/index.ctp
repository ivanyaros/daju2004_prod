<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Utensilios Usados') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utensilio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
            <?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($utensiliosUsado->id) ?></td>
                <td><?= $utensiliosUsado->has('estados_de_orden') ? $this->Html->link($utensiliosUsado->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $utensiliosUsado->estados_de_orden->id]) : '' ?></td>
                <td><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->label, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
                <td><?= h($utensiliosUsado->observaciones) ?></td>
                
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
