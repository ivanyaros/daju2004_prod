<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['controller' => 'MaquinasUsadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['controller' => 'MaquinasUsadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maquinas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquina) ?>
    <fieldset>
        <legend><?= __('Add Maquina') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('coste_operacion');
            echo $this->Form->control('coste_tiempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
