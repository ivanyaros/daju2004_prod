<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prioridades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prioridades form large-9 medium-8 columns content">
    <?= $this->Form->create($prioridade) ?>
    <fieldset>
        <legend><?= __('Add Prioridade') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
