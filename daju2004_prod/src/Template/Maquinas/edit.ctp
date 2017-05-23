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
                ['action' => 'delete', $maquina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maquinas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquina) ?>
    <fieldset>
        <legend><?= __('Edit Maquina') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('ordens_estados._ids', ['options' => $ordensEstados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
