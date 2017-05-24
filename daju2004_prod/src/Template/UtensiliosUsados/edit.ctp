<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utensiliosUsado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utensiliosUsados form large-9 medium-8 columns content">
    <?= $this->Form->create($utensiliosUsado) ?>
    <fieldset>
        <legend><?= __('Edit Utensilios Usado') ?></legend>
        <?php
            echo $this->Form->control('estados_de_orden_id', ['options' => $estadosDeOrdens, 'empty' => true]);
            echo $this->Form->control('utensilio_id', ['options' => $utensilios, 'empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
