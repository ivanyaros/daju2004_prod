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
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Entrada'), ['controller' => 'ProcesoProductoEntrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto Salida'), ['controller' => 'ProcesoProductoSalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="producto form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('referencia_proveedor');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
            echo $this->Form->control('peso');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('larga');
            echo $this->Form->control('coste');
            echo $this->Form->control('ancho');
            echo $this->Form->control('largo');
            echo $this->Form->control('tolerancia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
