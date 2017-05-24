<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Material'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Material'), ['controller' => 'ProveedoresMaterial', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Material'), ['controller' => 'ProveedoresMaterial', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="material form large-9 medium-8 columns content">
    <?= $this->Form->create($material) ?>
    <fieldset>
        <legend><?= __('Add Material') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('referencia_proveedor');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('longitud');
            echo $this->Form->control('anchura');
            echo $this->Form->control('profundidad');
            echo $this->Form->control('color');
            echo $this->Form->control('gramaje');
            echo $this->Form->control('peso_ud');
            echo $this->Form->control('unidades_embalaje');
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
