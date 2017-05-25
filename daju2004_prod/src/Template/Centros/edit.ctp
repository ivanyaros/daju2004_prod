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
                ['action' => 'delete', $centro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entradas De Materiales'), ['controller' => 'EntradasDeMateriales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entradas De Materiale'), ['controller' => 'EntradasDeMateriales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envios'), ['controller' => 'Envios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centros form large-9 medium-8 columns content">
    <?= $this->Form->create($centro) ?>
    <fieldset>
        <legend><?= __('Edit Centro') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('direccion');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
