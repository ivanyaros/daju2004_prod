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
                ['action' => 'delete', $maquinasUsada->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsada->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maquinasUsadas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquinasUsada) ?>
    <fieldset>
        <legend><?= __('Edit Maquinas Usada') ?></legend>
        <?php
            echo $this->Form->control('estados_de_orden_id', ['options' => $estadosDeOrdens, 'empty' => true]);
            echo $this->Form->control('maquina_id', ['options' => $maquinas, 'empty' => true]);
            echo $this->Form->control('operaciones');
            echo $this->Form->control('uso');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
