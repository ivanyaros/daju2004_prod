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
                ['action' => 'delete', $proceso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proceso form large-9 medium-8 columns content">
    <?= $this->Form->create($proceso) ?>
    <fieldset>
        <legend><?= __('Edit Proceso') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
            echo $this->Form->control('enlaces');
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('coste_tiempo');
            echo $this->Form->control('coste_operaciones');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('larga');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
