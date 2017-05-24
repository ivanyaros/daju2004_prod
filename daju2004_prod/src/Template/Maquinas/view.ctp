<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maquina'), ['action' => 'edit', $maquina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maquina'), ['action' => 'delete', $maquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['controller' => 'MaquinasUsadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['controller' => 'MaquinasUsadas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maquinas view large-9 medium-8 columns content">
    <h3><?= h($maquina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($maquina->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($maquina->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($maquina->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($maquina->coste_tiempo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Maquinas Usadas') ?></h4>
        <?php if (!empty($maquina->maquinas_usadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Maquina Id') ?></th>
                <th scope="col"><?= __('Operaciones') ?></th>
                <th scope="col"><?= __('Uso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($maquina->maquinas_usadas as $maquinasUsadas): ?>
            <tr>
                <td><?= h($maquinasUsadas->id) ?></td>
                <td><?= h($maquinasUsadas->estados_de_orden_id) ?></td>
                <td><?= h($maquinasUsadas->maquina_id) ?></td>
                <td><?= h($maquinasUsadas->operaciones) ?></td>
                <td><?= h($maquinasUsadas->uso) ?></td>
                <td><?= h($maquinasUsadas->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MaquinasUsadas', 'action' => 'view', $maquinasUsadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MaquinasUsadas', 'action' => 'edit', $maquinasUsadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaquinasUsadas', 'action' => 'delete', $maquinasUsadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
