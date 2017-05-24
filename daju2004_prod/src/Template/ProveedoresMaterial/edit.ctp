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
                ['action' => 'delete', $proveedoresMaterial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresMaterial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proveedores Material'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedoresMaterial form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedoresMaterial) ?>
    <fieldset>
        <legend><?= __('Edit Proveedores Material') ?></legend>
        <?php
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
