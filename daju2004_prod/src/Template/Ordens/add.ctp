<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prioridades'), ['controller' => 'Prioridades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prioridade'), ['controller' => 'Prioridades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['controller' => 'EstadosDeOrdens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estados De Orden'), ['controller' => 'EstadosDeOrdens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordens form large-9 medium-8 columns content">
    <?= $this->Form->create($orden) ?>
    <fieldset>
        <legend><?= __('Add Orden') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fecha_creacion', ['empty' => true]);
            echo $this->Form->control('fecha_terminacion', ['empty' => true]);
            echo $this->Form->control('estado_id', ['options' => $estados, 'empty' => true]);
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('proceso_id', ['options' => $proceso]);
            echo $this->Form->control('scrap');
            echo $this->Form->control('coste_operario');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('prioridade_id', ['options' => $prioridades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
