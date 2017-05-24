<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Objetos Entrada'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetosEntrada form large-9 medium-8 columns content">
    <?= $this->Form->create($objetosEntrada) ?>
    <fieldset>
        <legend><?= __('Add Objetos Entrada') ?></legend>
        <?php
            echo $this->Form->control('entrada_id',['options' => $entradas, 'empty' => true]);
            echo $this->Form->control('salida_id', ['options' => $salidas,   'empty'=> true]);
            echo $this->Form->control('cantidad_entrada');
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
