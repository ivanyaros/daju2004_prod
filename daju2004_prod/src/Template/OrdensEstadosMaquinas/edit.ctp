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
                ['action' => 'delete', $ordensEstadosMaquina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosMaquina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados Maquinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosMaquinas form large-9 medium-8 columns content">
    <?= $this->Form->create($ordensEstadosMaquina) ?>
    <fieldset>
        <legend><?= __('Edit Ordens Estados Maquina') ?></legend>
        <?php
            echo $this->Form->control('ordens_estado_id', ['options' => $ordensEstados, 'empty' => true]);
            echo $this->Form->control('maquina_id', ['options' => $maquinas, 'empty' => true]);
            echo $this->Form->control('operaciones');
            echo $this->Form->control('uso');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
