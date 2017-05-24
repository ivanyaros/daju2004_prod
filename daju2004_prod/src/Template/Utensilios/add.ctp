<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['controller' => 'UtensiliosUsados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['controller' => 'UtensiliosUsados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="utensilios form large-9 medium-8 columns content">
    <?= $this->Form->create($utensilio) ?>
    <fieldset>
        <legend><?= __('Add Utensilio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
