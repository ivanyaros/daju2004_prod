<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos Entrada'), ['controller' => 'ObjetosEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objetos Entrada'), ['controller' => 'ObjetosEntrada', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetos form large-9 medium-8 columns content">
    <?= $this->Form->create($objeto) ?>
    <fieldset>
        <legend><?= __('Add Objeto') ?></legend>
        <?php
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('numero_serie');
            echo $this->Form->control('referencia');
            echo $this->Form->control('orden_id', ['options' => $ordens]);
            echo $this->Form->control('lote');
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones]);
            echo $this->Form->control('coste');
            echo $this->Form->control('defectuosos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
