<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Utensilio'), ['action' => 'edit', $utensilio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utensilio'), ['action' => 'delete', $utensilio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensilio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['controller' => 'UtensiliosUsados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['controller' => 'UtensiliosUsados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="utensilios view large-9 medium-8 columns content">
    <h3><?= h($utensilio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($utensilio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($utensilio->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($utensilio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($utensilio->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Utensilios Usados') ?></h4>
        <?php if (!empty($utensilio->utensilios_usados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Utensilio Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($utensilio->utensilios_usados as $utensiliosUsados): ?>
            <tr>
                <td><?= h($utensiliosUsados->id) ?></td>
                <td><?= h($utensiliosUsados->estados_de_orden_id) ?></td>
                <td><?= h($utensiliosUsados->utensilio_id) ?></td>
                <td><?= h($utensiliosUsados->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UtensiliosUsados', 'action' => 'view', $utensiliosUsados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UtensiliosUsados', 'action' => 'edit', $utensiliosUsados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UtensiliosUsados', 'action' => 'delete', $utensiliosUsados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
