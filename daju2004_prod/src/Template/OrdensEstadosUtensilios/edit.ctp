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
                ['action' => 'delete', $ordensEstadosUtensilio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUtensilio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados Utensilios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosUtensilios form large-9 medium-8 columns content">
    <?= $this->Form->create($ordensEstadosUtensilio) ?>
    <fieldset>
        <legend><?= __('Edit Ordens Estados Utensilio') ?></legend>
        <?php
            echo $this->Form->control('ordens_estado_id', ['options' => $ordensEstados, 'empty' => true]);
            echo $this->Form->control('utensilio_id', ['options' => $utensilios, 'empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
