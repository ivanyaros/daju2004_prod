<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Usuarios En Estados Orden') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
        </thead>
        <tbody>
            <?php foreach ($usuariosEnEstadosOrden as $usuariosEnEstadosOrden): ?>
            <?php $my_url= $this->Url->build(['controller' => 'usuariosEnEstadosOrden', 'action' => 'view',$usuariosEnEstadosOrden->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($usuariosEnEstadosOrden->id) ?></td>
                <td><?= $usuariosEnEstadosOrden->has('estados_de_orden') ? $this->Html->link($usuariosEnEstadosOrden->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $usuariosEnEstadosOrden->estados_de_orden->id]) : '' ?></td>
                <td><?= $usuariosEnEstadosOrden->has('user') ? $this->Html->link($usuariosEnEstadosOrden->user->label, ['controller' => 'Users', 'action' => 'view', $usuariosEnEstadosOrden->user->id]) : '' ?></td>
                <td><?= $this->Number->format($usuariosEnEstadosOrden->parte) ?></td>
                <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
                
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
