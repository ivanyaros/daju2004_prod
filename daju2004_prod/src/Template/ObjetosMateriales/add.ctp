<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Objetos Materiales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetosMateriales form large-9 medium-8 columns content">
    <?= $this->Form->create($objetosMateriale) ?>
    <fieldset>
        <legend><?= __('Add Objetos Materiale') ?></legend>
        <?php
            echo $this->Form->control('objeto_id', ['options' => $objetos, 'empty' => true]);
            echo $this->Form->control('materiale_id', ['options' => $materiales, 'empty' => true]);
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('metros_gastados');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
